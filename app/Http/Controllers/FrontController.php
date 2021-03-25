<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class FrontController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['only' => 'admin']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	public function contact() 
	{
		return view('contact');
	}

	public function reviews()
	{
		$movies = Movie::Movies();
		return view('reviews', compact('movies'));
	}

	public function admin()
	{
        return view('admin.index');
    }
}