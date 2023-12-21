<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function signIn(Request $request)
        {
            $email = $request->input('email');
            $password = $request->input('password');

            return [$email, $password];
            // $credentials = $request->only('email', 'password');

            // if (Auth::attempt($credentials)) {
            //     return response()->json(['message' => 'Authentication successful'], 200);
            // }

            // return response()->json(['message' => 'Invalid credentials'], 401);
        }
}
