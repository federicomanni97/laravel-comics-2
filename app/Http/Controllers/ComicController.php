<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index(Request $request): View
    {
        //
        // dd($request->query());
        if(!empty($request->query('search'))){
            $search = $request->query('search');
            $comics = Comic::where('type', $search)->get();
            // return view('comics.index', compact('comics'));
        } else {
            $comics = Comic::all();
        }
        // $comics = Comic::all();
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
    public function store(StoreComicRequest $request)
    {
        //
        // //! prendo i dati passati del form dalla request
        
        // $request->validate([
        //     'title' => 'required|min:5|max:255',
        //     'description' => 'required|min:5|max:255',
        //     'price' => 'required|min:5|max:255',
        //     'thumb' => 'required|min:5|max:255',
        //     // 'thumb'=> 'url',
        //     'sale_date' => 'required|min:5|max:255',
        //     'type' => 'required|min:5|max:255',
        //     'series' => 'required|min:5|max:255',
        // ]);
        // $form = $request->all();
        //! creo un nuovo prodotto
        // $new_comic = new Comic();
        // $new_comic->title = $form['title'];
        // $new_comic->description = $form['description'];
        // $new_comic->price = $form['price'];
        // $new_comic->thumb = $form['thumb'];
        // $new_comic->sale_date = $form['sale_date'];
        // $new_comic->series = $form['series'];
        // $new_comic->type = $form['type'];
        // //! assegno i valori del form al nuovo prodotto
        // $new_comic->fill($form);
        // //! salvo il nuovo prodotto
        // $new_comic->save();
        $form = $request->validated();
        $new_comic = Comic::create($form);
        // //! reindirizzo l'utente alla pagina del nuovo prodotto appena creato
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
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        //
        $form = $request->all();
        // $comic->title = $form['title'];
        // $comic->description = $form['description'];
        // $comic->price = $form['price'];
        // $comic->sale_date = $form['sale_date'];
        // $comic->series = $form['series'];
        // $comic->type = $form['type'];
        $form = $request->validated();
        $comic->fill($form);
        $comic->update();
        return to_route('comics.show', $comic->id); 
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
    /**
     * Summary of validation
     * @return void
     */
}