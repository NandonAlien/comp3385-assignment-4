<?php

namespace App\Http\Controllers;
use Dotenv\Exception\ValidationException;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    function index(){

        $movies = Movie::all();

        return response()->json([
            'movies'=>$movies
        ]);
    }

    function store(Request $request ){
          $request->validate([
            'title'=> 'required|max:32',
            'description'=> 'required',
            'poster_path' =>['required',File::types(['png','jpg','webp'])->min(180)->max(1080)]
        ]);
   
        $base = new Movie();
        $base->title= $request->input('title');
        $base->description= $request ->input('description');
        $base->poster_path= $request ->poster_path-> storeAs('images',$request->poster_path->getClientOriginalName());
        $base->save();
        return response()->json([
            'message'=>"Movie created sucessfully",
            'movie'=>$base
        ],201);
    }
    }
