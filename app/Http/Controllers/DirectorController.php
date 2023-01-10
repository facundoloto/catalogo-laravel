<?php

namespace App\Http\Controllers;

use App\Models\directors;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function postDirector (Request $request){

        try {
           
            $director = new directors();
            $director->name = $request->name;
            $director->lastName = $request->lastName;
            $director->age = $request->age;
            $director->save();

            return response()->json(
                [
                    'message' => 'create',
                    'actor' => $director,
                    'status' => '200'

                ]
            );

        } catch (\Throwable $th) {

            return response()->json(
                [
                    'message' => 'not created',
                    'actor' => $director,
                    'status' => '201',
                    'err'=>$th

                ]
            );

        }

    }
}
