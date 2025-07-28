<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
     public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed',
            'is_admin'=>'boolean'
        ]);
        $user = User::create(
            [
                'name' => $fields['name'],
                'email' => $fields['email'],
                'is_admin'=>$fields['is_admin'],
                'password' => bcrypt($fields['password']),
            ]
        );
        $token = $user->createToken($request->name);
        return [
            'user' => $user,
            'token'=>$token->plainTextToken
        ];
    }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        If(!$user || !Hash::check($request->password,$user->password)){
            return response()->json(['message'=>'Invalid Credentials'], 401);
        }
        $token = $user->createToken($user->name);
        return [
            'user' => $user,
            'token'=>$token->plainTextToken
        ];
    }
    public function logout(Request $request){

        $request->user()->tokens()->delete();
        return response()->json(['message'=>'Logged Out Successfully'], 200);
    }
}
