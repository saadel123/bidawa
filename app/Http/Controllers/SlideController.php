<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    
    public function SiteIndex()
    {
        return view('site.media', ['slides' => Slide::all()]);
    }
    public function index()
    {
        return view('admin.slides.index', ['slides' => Slide::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $input['image'] = $request->image->store('images/Slide', 'public');
        }
        Slide::create($input);
        return redirect()->route('slides.index')->with('success', 'le contenu a été bien enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.slides.edit', ['slide' => Slide::findOrFail($id)]);
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
        if ($request->hasFile('image')) {
            $input['image'] = $request->image->store('images/Slide', 'public');
        }
        $slide = Slide::findOrFail($id);
        $slide->update($input);
        return redirect()->route('slides.index')->with('success', 'le contenu a été bien enregistré');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        $slide->delete();
        return redirect()->route('slides.index')->with('success', 'le contenu a été bien enregistré');
    }
}
