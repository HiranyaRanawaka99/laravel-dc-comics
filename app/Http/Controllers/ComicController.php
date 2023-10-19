<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $comics = Comic::all();

       return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route("comic.show", $comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    //oggetto di tipo Comic che chiamo comic
    public function show(Comic $comic)
    {
    
       return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * 
     */
    // METODO 1: dependency injection
     public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

     // METODO 2: con id
    // public function edit($id)
    // {

    //     $comic= Comic::findOrFail($id);
    //     return view("comic.edit", compact("comic"));
        



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, Comic $comic)
    {
       $data = $request->all();

       $comic->update($data);

       return redirect()->route("comic.show", $comic);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comic.index", $comic);
    }
}