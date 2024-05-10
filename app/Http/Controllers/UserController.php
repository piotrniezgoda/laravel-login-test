<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register (Request $request) {
       $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:4|max:255',
        ]);

        $user = new User([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return response()->json([
            'status' => 'ok',
        ], 201);
    }

    public function delete (Request $request) {
        $userId = $request->id;
        $currentUser =  auth('sanctum')->user();
        $user = User::find($userId);
        $blockDelete = $user->id === $currentUser->id;

        if (!$blockDelete) {
            $user->delete();
            return response()->json([
                'status' => 'ok',
            ], 201);
        } else {
            return response()->json([
                'status' => 'You cant delete currently logged user!',
            ], 201);
        }
 
     }
}