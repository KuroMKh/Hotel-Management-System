<?php

namespace App\Http\Controllers\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();
        $findUser = User::where("google_id", $user->getId())->first();

        if (!is_null($findUser)) {
            Auth::login($findUser);
        } else {
            $findUser = User::create([
                "name" => $user->getName(),
                "email" => $user->getEmail(),
                "google_id" => $user->getId(),
            ]);
            Auth::login($findUser);
        }

        if (is_null($findUser->password)) {
            return view('auth.set-password');
        } else {
            return redirect()->route('home');
        }


    }

}
