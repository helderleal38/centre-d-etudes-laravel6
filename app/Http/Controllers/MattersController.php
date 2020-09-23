<?php

namespace App\Http\Controllers;

use App\Matter;
use Illuminate\Http\Request;

class MattersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matters = Matter::All();
        return view('administration.administrateur.matters.mattersList', compact('matters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.administrateur.matters.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $image = $request->image;
        $image_name = time() .'_'.$image->getClientOriginalExtension();
        $image->move('uploads/matters/', $image_name);
        Matter::create([
            'matter' => Request('matter'),
            'title' => Request('title'),
            'content' => Request('content'),
            'image' => "uploads/matters/" . $image_name,
            'hourPrice' => Request('hourPrice'),
            'yearReduction' => Request('yearReduction'),
            'extraReduction' => Request('extraReduction')
        ]);
        
        return back()
        ->with('success','Votre matiére à bien étè ajouté');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matter $matter)
    {
        return view('administration.administrateur.matters.edit', compact('matter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matter $matter)
    {
        $matter->update($request->all());
        return back()->with('success', "Article modifié avec success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matter $matter)
    {
        $matter->delete();
        return back()->with('success', "L'article a bien étè suprimmé !");

    }
}
