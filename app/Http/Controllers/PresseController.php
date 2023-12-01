<?php

namespace App\Http\Controllers;

use App\Models\Presse;
use Illuminate\Http\Request;

class PresseController extends Controller
{
    public function SiteIndex()
    {
        return view('site.media', ['presses' => Presse::all()]);
    }
    public function index()
    {
        return view('admin.presses.index', ['presses' => Presse::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.presses.create');
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
            $input['image'] = $request->image->store('images/Media', 'public');
        }
        Presse::create($input);
        return redirect()->route('presses.index')->with('success', 'le contenu a été bien enregistré');
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
        return view('admin.presses.edit', ['presse' => Presse::findOrFail($id)]);
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
            $input['image'] = $request->image->store('images/Media', 'public');
        }
        $presse = Presse::findOrFail($id);
        $presse->update($input);
        return redirect()->route('presses.index')->with('success', 'le contenu a été bien enregistré');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $presse = Presse::findOrFail($id);
        $presse->delete();
        return redirect()->route('presses.index')->with('success', 'le contenu a été bien enregistré');
    }
}
