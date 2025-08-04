<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SetPasswordController extends Controller
{
    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'password' => [
                'required',
                Password::min(6)
                    ->letters()     // Require at least one letter
                    ->mixedCase()   // Require at least one uppercase and one lowercase letter
                    ->numbers()     // Require at least one number
                    ->symbols(),    // Require at least one symbol
                'confirmed'
            ],
            'password_confirmation' => ['required']
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->getPassword());
        $user->save();

        return redirect()->route('home')->with('success', 'Password has been set successfully.');
    }
}
