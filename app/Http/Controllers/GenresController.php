<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genres;
use App\Models\movies;
use App\Models\episodes;

class GenresController extends Controller
{
    function index(){
        $genres_data = genres::all();
        return view('mainpage', compact('genres_data'));
    }

    function genre_page($id){
        $genres_data = genres::find($id);
        return view('genre_page', compact('genres_data'));
    }

    function detail_page($id){
        $genres_data = genres::find($id);
        $movies_data = movies::find($id);
        $episodes_data = episodes::where('movies_id', '=', $movies_data->id)->paginate(3);
       

        return view('moviedetail', compact('movies_data', 'genres_data', 'episodes_data'));
    }

}
