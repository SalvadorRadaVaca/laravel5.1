<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Redirect;
use App\Genre;
use App\Movie;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route)
    {
        $this->movie = Movie::find($route->getParameter('pelicula'));
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $movies = Movie::Movies();
		return view('movie.index', compact('movies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$genres = Genre::lists('genre', 'id');
        return view('movie.create', compact('genres'));
	}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movie::create($request->all());
        
        Session::flash('message', 'Pelicula creada correctamente');
		return Redirect::to('pelicula');
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
    public function edit()
    {
        $genres = Genre::lists('genre', 'id');
        return view('movie.edit', ['movie' => $this->movie, 'genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->movie->fill($request->all());
        $this->movie->save();

        Session::flash('message', 'Pelicula editada correctamente');
		return Redirect::to('pelicula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $this->movie->delete();
        \Storage::delete($this->movie->path);
        Session::flash('message', 'Pelicula eliminada correctamente');
		return Redirect::to('pelicula');
    }
}
