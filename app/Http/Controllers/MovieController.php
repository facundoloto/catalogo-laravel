<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function postMovie (Request $request){

        try {
           
            $movie = new movie();
            $movie->title= $request->title;
            $movie->year = $request->year;
            $movie->save();

            return response()->json(
                [
                    'message' => 'movie create',
                    'movie' => $movie,
                    'status' => '200'

                ]
            );

        } catch (\Throwable $th) {

            return response()->json(
                [
                    'message' => 'movie not created',
                    'movie' => $movie,
                    'status' => '201',
                    'err'=>$th

                ]
            );

        }

    }
}
