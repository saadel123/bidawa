<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Normalizer;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function SiteIndex()
    {
        $evenements = Evenement::Where('date', '<=', now()->endOfDay())->orderBy('created_at', 'desc')->get();
        $prochaine_evenment = Evenement::Where('date', '>', now()->endOfDay())->get();
        return view('site.evenements', ['evenements' => $evenements, 'prochaine_evenment' => $prochaine_evenment]);
    }
    public function index()
    {
        return view('admin.evenements.index', ['evenements' => Evenement::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.evenements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $count = 0;
        $count1 = 0;

        $slug_fr = Str::slug($request->input('title_fr'), '-', 'en');
        while (Evenement::where('slug_fr', $request->input('title'))->exists()) {
            $count++;
            $slug_fr = Str::slug($request->input('title_fr'), '-', 'en') . '-' . $count;
        }
        $input['slug_fr'] = $slug_fr;

        $normalizedArabic = Normalizer::normalize($request->title_ar, Normalizer::FORM_KD);
        $slug_ar = str_replace(' ', '-', $normalizedArabic);
        while (Evenement::where('slug_ar', $request->input('title_ar'))->exists()) {
            $count1++;
            $slug_ar = str_replace(' ', '-', $normalizedArabic) . '-' . $count;
        }
        $input['slug_ar'] = $slug_ar;

        if ($request->hasFile('image')) {
            $input['image'] = $request->image->store('images/evenements', 'public');
        }
        if ($request->hasFile('affiche')) {
            $input['affiche'] = $request->affiche->store('images/evenements', 'public');
        }
        if ($request->has('videos')) {
            $input['videos'] = json_encode($input['videos'], JSON_UNESCAPED_SLASHES);
        }
        $evenement = Evenement::create($input);
        if ($evenement_media = $request->file('media')) {
            foreach ($evenement_media as $media) {
                $url = $media->store('media/evenement', 'public');
                $type = $media->getClientOriginalExtension();
                $evenement->media()->create([
                    'url' => $url,
                    'type' => $type,
                ]);
            }
        }
        return redirect()->route('evenements.index')->with('success', 'le contenu a été bien enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $evenement = Evenement::where('slug_fr', $slug)->with('media')->first();

        if (!$evenement) {
            $evenement = Evenement::where("slug_ar", $slug)
                ->first();
        }
        SEOTools::setTitle(Str::limit($evenement->{'title_' . app()->getLocale()}, 60, ''));
        SEOTools::setDescription(Str::limit($evenement->{'description_' . app()->getLocale()}, 150, '...'));
        SEOTools::metatags()->addMeta('article:published_time', $evenement->created_at->toW3CString(), 'property');
        SEOTools::metatags()->addMeta('article:section', 'news');
        // SEOTools::metatags()->addKeyword([$evenement->meta_keywords]);

        // Set Open Graph metadata
        SEOTools::opengraph()->setTitle(Str::limit($evenement->{'title_' . app()->getLocale()}, 60, ''));
        SEOTools::opengraph()->setDescription(Str::limit($evenement->{'description_' . app()->getLocale()}, 150, '...'));
        SEOTools::opengraph()->setUrl(config('app.url'));
        SEOTools::opengraph()->setType('article');
        SEOTools::opengraph()->setArticle([
            'published_time' => $evenement->created_at,
            'modified_time' => $evenement->updated_at,
        ]);
        SEOTools::opengraph()->addImage(asset('storage/' . $evenement->image), ['height' => 300, 'width' => 300]);

        // Set JSON-LD metadata
        SEOTools::jsonLd()->setTitle(Str::limit($evenement->{'title_' . app()->getLocale()}, 60, ''));
        SEOTools::jsonLd()->setDescription(Str::limit($evenement->{'description_' . app()->getLocale()}, 150, '...'));
        SEOTools::jsonLd()->setType('Article');
        return view('site.evenement-details', ['evenement' => $evenement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.evenements.edit', ['evenement' => Evenement::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $count = 0;
        $count1 = 0;
        $slug_fr = Str::slug($request->input('title_fr'), '-', 'en');
        while (Evenement::where('slug_fr', $request->input('title'))->exists()) {
            $count++;
            $slug_fr = Str::slug($request->input('title_fr'), '-', 'en') . '-' . $count;
        }
        $input['slug_fr'] = $slug_fr;

        $normalizedArabic = Normalizer::normalize($request->title_ar, Normalizer::FORM_KD);
        $slug_ar = str_replace(' ', '-', $normalizedArabic);
        while (Evenement::where('slug_ar', $request->input('title_ar'))->exists()) {
            $count1++;
            $slug_ar = str_replace(' ', '-', $normalizedArabic) . '-' . $count;
        }
        $input['slug_ar'] = $slug_ar;

        if ($request->hasFile('image')) {
            $input['image'] = $request->image->store('images/evenements', 'public');
        }
        if ($request->hasFile('affiche')) {
            $input['affiche'] = $request->affiche->store('images/evenements', 'public');
        }
        if ($request->has('videos')) {
            $input['videos'] = json_encode($input['videos'], JSON_UNESCAPED_SLASHES);
        }
        $evenement = Evenement::findOrFail($id);
        $evenement->update($input);
        if ($evenement_media = $request->file('media')) {
            foreach ($evenement_media as $media) {
                $url = $media->store('media/evenement', 'public');
                $type = $media->getClientOriginalExtension();
                $evenement->media()->create([
                    'url' => $url,
                    'type' => $type,
                ]);
            }
        }
        return redirect()->route('evenements.index')->with('success', 'le contenu a été bien enregistré');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $evenement = Evenement::findOrFail($id);
        $evenement->media()->delete();
        $evenement->delete();
        return redirect()->route('evenements.index')->with('success', 'le contenu a été bien enregistré');
    }
}
