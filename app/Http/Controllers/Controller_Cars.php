<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Cars extends Controller
{
    public function get(Request $request) {
        return response()->json([
            'cars' => [
                'registration' => 'ABC001',
                'dateRegistered' => '2019-01-01',
                'color' => 'black',
                'make' => 'tesla',
                'model' => 's'
            ]
        ], 200);
    }

    public function post(Request $request) {
        // code to create records of cars
    }

    public function put(Request $request) {
        // code to update records of cars
    }

    public function delete(Request $request) {
        // code to delete records of cars
    }
}

