<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class DashboardController extends Controller
{
    public function loginData (Request $request) {
        $currentUser =  auth('sanctum')->user();
        $users = User::all();
        return response()->json([
            "isAuth"=> true,
            "page"=> "dashboard",
            "timestamp"=> time(),
            "users"=> $users,
            "currentUser"=>$currentUser,
        ]);
    }
}