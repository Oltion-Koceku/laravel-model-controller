<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('home',compact('movies'));
    }

    public function bestMovies(){

        $movies = Movie::where('vote', '>=', 9)->get();

        return view('home',compact('movies'));
    }

    public function badMovies(){

        $movies = Movie::where('vote', '<=', 8)->get();

        return view('home',compact('movies'));
    }

    public function moviesDetail($id){

        $movies = Movie::find($id);

        return view('moviesDetail',compact('movies'));
    }



    public function nuovaPagina(){
        return view('nuova-pagina');
    }
}
