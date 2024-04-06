<?php

namespace App\Http\Controllers;
use Dotenv\Exception\ValidationException;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    function index(){

        $movie = Movie::all();

        return response()->json([
            'movies'=>$movie
        ]);
    }

    function store(Request $request ){
          $request->validate([
            'title'=> 'required|max:32',
            'description'=> 'required',
            'poster_path' =>['required',File::types(['png','jpg','webp'])->min(1024)->max(12*1024)]
        ]);
   
        $base = new Movie();
        $base->title= $request->input('title');
        $base->description= $request ->input('description');
        $base->poster_path= $request ->input('poster_path');
        if ($base->fails()){

        }
        return response()->json([
            'message'=>"Movie created sucessfully",
            'movie'=>$base
        ]);
    }
    }
