<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\movies;

class MoviesController extends Controller
{
    //
    function index($id){
        $movies_data = movies::find($id);
        return view('moviedetail', compact('movies_data'));
    }
}
