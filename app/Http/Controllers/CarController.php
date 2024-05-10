<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function single(Request $request): JsonResponse {
        return response()->json([
            "test"=>$request["number"] * 5,
            "test2"=>"string",
        ], 200);
    }
}
