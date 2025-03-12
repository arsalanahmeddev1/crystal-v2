<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Jobs\SendVerificationCodeEmailJob;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function redirectToGoogle()
     {
         return Socialite::driver('google')->redirect();
     }
     /**
      * Create a new controller instance.
      *
      * @return void 
      */
     public function handleGoogleCallback()
     {
        //  try {
        //      $user = Socialite::driver('google')->user();
        //     //  dd($user->id);
        //      $google_user = User::where('google_id', $user->id)->orWhere('email', $user->email)->first();
        //      if($google_user->google_id == $user->id){        
        //         Auth::login($google_user);    
        //      }
        //      else if($google_user->google_id == $user->email){
        //         $google_user->google_id = $user->id;
        //         $google_user->save();
                
        //         Auth::login($google_user); 
        //      }else{
                
        //          $google_user = User::create([ 
        //              'name' => $user->name, 
        //              'email' => $user->email,
        //              'google_id'=> $user->id, 
        //              'password' => Hash::make('123456dummy'),
        //          ]);
        //          Auth::login($google_user);
                 
        //      }

        //      if (Auth::check()) {
        //         $google_user->verification_code = random_int(10000, 999999);
        //         $google_user->verification_status = 0;
        //         $google_user->save();
        //         return redirect()->route('dashboard');
        //     } else {
        //         return redirect()->back()->with('error', 'Authentication Error');
        //     }
        //  } catch (Exception $e) {
        //     // throw $e;
        //     return redirect()->back()->with('error', 'Authentication Error... Please try again');
        //  }
        try {

            $google_user = Socialite::driver('google')->user();

            $random_code = random_int(10000, 999999);
            $user_email = $google_user->email;

            $finduser = User::where('google_id', $google_user->id)->orWhere('email', $user_email)->first();

            if ($finduser) {
                if ($finduser->google_id === $google_user->id) {
                } else if ($finduser->email === $user_email) {
                    $finduser->google_id = $google_user->id;
                }
                
                $finduser->verification_code = $random_code;
                $finduser->verification_status = 0;
                
                $finduser->save();
                Auth::login($finduser);

            } else {
                $newUser = User::create([
                    'name' => $google_user->name,
                    'email' => $user_email,
                    'role_id' => 2, //user
                    'google_id' => $google_user->id,
                    'password' => Hash::make($user_email),
                    'verification_code' => $random_code,
                    'verification_status' => 0
                ]);
                Auth::login($newUser);
            }

            if (Auth::check()) {

                $details = [
                    'email' => $user_email,
                    'title' => 'Mail from '. env('APP_NAME'),
                    'url' => route('login.verification'),
                    'body' => 'Enter this code to verify your account.',
                    'verification_code' => $random_code
                ];

                // dispatch(new SendVerificationCodeEmailJob($details));

                return redirect()->route('dashboard');
                // return redirect()->intended('dashboard/user');
            } else {
                return redirect()->back()->with('error', 'Authentication Error, please try again!');
            }
        }catch(Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            dd($e->getMessage());
        }
}
}
