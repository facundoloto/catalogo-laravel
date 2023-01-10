<?php

namespace App\Http\Controllers;

use App\Models\actor_movie;
use Illuminate\Http\Request;

class ActorMovieController extends Controller
{
    public function postActorMovie(Request $request){

        try {
           
            $actor_movie= new actor_movie();
            $actor_movie->idMovie= $request->id_movie;
            $actor_movie->id_actor = $request->id_actor;
            $actor_movie->save();

            return response()->json(
                [
                    'message' => 'create',
                    'movie' => $actor_movie,
                    'status' => '200'

                ]
            );

        } catch (\Throwable $th) {

            return response()->json(
                [
                    'message' => 'not created',
                    'movie' => $actor_movie,
                    'status' => '201',
                    'err'=>$th

                ]
            );

        }

    }
}
