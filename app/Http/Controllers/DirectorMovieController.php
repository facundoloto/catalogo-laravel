<?php

namespace App\Http\Controllers;

use App\Models\director_movie;
use Illuminate\Http\Request;

class DirectorMovieController extends Controller
{
    //
    public function postDirectorMovie(Request $request){

        try {
           
            $director_movie= new director_movie();
            $director_movie->idMovie= $request->id_movie;
            $director_movie->id_director = $request->id_director;
            $director_movie->save();

            return response()->json(
                [
                    'message' => 'create',
                    'movie' => $director_movie,
                    'status' => '200'

                ]
            );

        } catch (\Throwable $th) {

            return response()->json(
                [
                    'message' => 'not created',
                    'movie' => $director_movie,
                    'status' => '201',
                    'err'=>$th

                ]
            );

        }

    }
}
