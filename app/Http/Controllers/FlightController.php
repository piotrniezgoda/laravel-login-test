<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function single(Request $request) {
        $flight = Flight::all();

        return response()->json($flight, 200);
    }
}
