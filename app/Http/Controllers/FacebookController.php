<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Create a new controller instance. 
     *
     * @return void
     */

    public function handleFacebookCallback()
    {
        try {
            dd("Hello");
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard/user');
            } else{
                $newUser = User::create(['email' => $user->email], [
                    'name' => $user->name,
                    'facebook_id' => $user->id,
                    'password' => Hash::make($user->email),
                ]);
                Auth::login($newUser);
                return redirect()->intended('dashboard/user');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
