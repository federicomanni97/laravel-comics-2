<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index(): View
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // //! prendo i dati passati del form dalla request
        $form = $request->all();
        // $request->validate([
        //     'title' => 'required|min:5|max:255',
        //     'description' => 'required|min:5|max:55',
        //     'price' => 'required|min:5|max:30',
        //     'sale_date' => 'required|min:5|max:255',
        //     'type' => 'required|min:5|max:255',
        //     'series' => 'required|min:5|max:255',
        // ]);
        //! creo un nuovo prodotto
        $new_comic = new Comic();
        $new_comic->title = $form['title'];
        $new_comic->description = $form['description'];
        $new_comic->price = $form['price'];
        $new_comic->thumb = $form['thumb'];
        $new_comic->sale_date = $form['sale_date'];
        $new_comic->series = $form['series'];
        $new_comic->type = $form['type'];
        // //! assegno i valori del form al nuovo prodotto
        // $new_comic->fill($form);
        // //! salvo il nuovo prodotto
        $new_comic->save();
        // $new_comic = Comic::create($form);
        //! reindirizzo l'utente alla pagina del nuovo prodotto appena creato
        return to_route('comics.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $form = $request->all();
        $comic->title = $form['title'];
        $comic->description = $form['description'];
        $comic->price = $form['price'];
        $comic->sale_date = $form['sale_date'];
        $comic->series = $form['series'];
        $comic->type = $form['type'];
        $comic->update();
        return to_route('comics.index', $comic->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return to_route('comics.index')->with('message', "Il prodotto $comic->title è stato eliminato.");
    }
}