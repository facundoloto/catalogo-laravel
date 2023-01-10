<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actors;

class ActorController extends Controller
{
    public function postActor (Request $request){

        try {
           
            $actor = new actors;
            $actor->name = $request->name;
            $actor->lastName = $request->lastName;
            $actor->age = $request->age;
            $actor->save();

            return response()->json(
                [
                    'message' => 'actor create',
                    'actor' => $actor,
                    'status' => '200'

                ]
            );

        } catch (\Throwable $th) {

            return response()->json(
                [
                    'message' => 'actor not created',
                    'actor' => $actor,
                    'status' => '201',
                    'err'=>$th

                ]
            );

        }

    }
}
