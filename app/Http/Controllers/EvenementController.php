<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function SiteIndex()
    {
        $evenements = Evenement::Where('date','<=',now()->endOfDay())->orderBy('created_at','desc')->get();
        $prochaine_evenment = Evenement::Where('date','>',now()->endOfDay())->get();
        return view('site.evenements',['evenements'=>$evenements,'prochaine_evenment'=>$prochaine_evenment]);
    }
    public function index()
    {
        return view('admin.evenements.index',['evenements'=>Evenement::orderBy('created_at','desc')->get()]);
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
        $count=0;
        $slug = Str::slug($request->input('title'), '-', 'en');
        while (Evenement::where('slug', $request->input('title'))->exists()) {
            $count++;
            $slug = Str::slug($request->input('title'), '-', 'en') . '-' . $count;
        }
        $input['slug']=$slug;
        if($request->hasFile('image')){
            $input['image']=$request->image->store('images/evenements', 'public');
        }
        if($request->hasFile('affiche')){
            $input['affiche']=$request->affiche->store('images/evenements', 'public');
        }
        if ($request->has('videos')) {
            $input['videos'] = json_encode($input['videos'], JSON_UNESCAPED_SLASHES);
        }
        $evenement = Evenement::create($input);
        if ($evenement_media = $request->file('media')) {
            foreach ($evenement_media as  $media) {
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
        $evenement=Evenement::where('slug',$slug)->with('media')->first();
        SEOTools::setTitle($evenement->title);
        SEOTools::setDescription($evenement->description);
        SEOTools::opengraph()->setUrl(env('APP_URL'));
        SEOTools::setCanonical(env('APP_URL').'/'.$evenement->slug);
        SEOTools::opengraph()->addProperty('type', 'activite');
        SEOTools::jsonLd()->addImage($evenement->image);
        return view('site.evenement-details',['evenement'=>$evenement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.evenements.edit',['evenement'=>Evenement::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $count=0;
        $slug = Str::slug($request->input('title'), '-', 'en');
        while (Evenement::where('slug', $request->input('title'))->exists()) {
            $count++;
            $slug = Str::slug($request->input('title'), '-', 'en') . '-' . $count;
        }
        $input['slug']=$slug;
        if($request->hasFile('image')){
            $input['image']=$request->image->store('images/evenements', 'public');
        }
        if($request->hasFile('affiche')){
            $input['affiche']=$request->affiche->store('images/evenements', 'public');
        }
        if ($request->has('videos')) {
            $input['videos'] = json_encode($input['videos'], JSON_UNESCAPED_SLASHES);
        }
        $evenement = Evenement::findOrFail($id);
        $evenement->update($input);
        if ($evenement_media = $request->file('media')) {
            foreach ($evenement_media as  $media) {
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
