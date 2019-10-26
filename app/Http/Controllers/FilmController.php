<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('pages/filmIndex', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = ['War', 'Romantic', 'Drama', 'Animation', 'Documentary', 'Adventure', 'Comedy'];
        return view('pages.filmCreate', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request -> validate([
          'title' => 'required',
          'film_director' => 'required',
          'description' => 'required',
          'genre' => 'required',
          'rating' => 'required'
        ]);

        $film = Film::create($validateData);
        return redirect('/films');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('pages.filmShow', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = ['War', 'Romantic', 'Drama', 'Animation', 'Documentary', 'Adventure', 'Comedy'];
        $film = Film::findOrFail($id);
        return view('pages.filmEdit', compact('genres','film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request -> validate([
          'title' => 'required',
          'film_director' => 'required',
          'description' => 'required',
          'genre' => 'required',
          'rating' => 'required'
        ]);

        $film = Film::findOrFail($id);
        $film -> update($validateData);

        return redirect('/films');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film -> delete();

        return redirect('/films');
    }
}
