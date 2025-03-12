<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Jobs\SendVerificationCodeEmailJob;
use App\Mail\LoginVerificationCodeMail;
use App\Models\User;
use Exception;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('auth.login');
        }
    }

    // public function admin_login()
    // {
    //     if (Auth::check()) {
    //         return redirect()->route('dashboard');
    //     } else {
    //         $admin = User::find(1);
    //         return view('auth.admin_login',compact('admin'));
    //     }
    // }

    /**
     * User Login Attempt
     */

    public function login_attempt(Request $request)
    {
        // validate the form if user has empty form
        $validate = Validator::make($request->all(), [
            'email' => 'required|min:4|max:50|exists:users',
            'password' => 'required'
        ]);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            // find User from our records
            $userfind = User::where('email', $request->email)->first();
            
            if ($userfind) {
                $userRoles = $userfind->roles->pluck('name','name')->all();
                // dd($userfind->getRoleNames());
                // if(in_array("admin", $userRoles) || in_array("super-admin", $userRoles)){
                //     return redirect()->back()->withInput($request->all())->with('error', "Invalid credinational");
                // }else {
                    if (Hash::check($request->password, $userfind->password)) {
                        // Password Matched

                        $remember_me = $request->remember ? true : false;
                        Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me);

                        // Auth::login($userfind);
                        if (Auth::check()) {
                            
                            $random_code = random_int(10000, 999999);

                            $userfind->verification_code = $random_code;
                            $userfind->verification_status = 0;
                            $userfind->save();

                            $details = [
                                'email' => $userfind->email,
                                'title' => 'Mail from '. env('APP_NAME'),
                                'url' => route('login.verification'),
                                'body' => 'Here is your login verification code:',
                                'verification_code' => $random_code
                            ];

                            // dispatch(new SendVerificationCodeEmailJob($details));

                            return redirect()->route('dashboard');
                        } else {
                            return redirect()->back()->withInput($request->all())->with('error', 'Authentication Error');
                        }
                    } else {
                        return redirect()->back()->withInput($request->all())->with('error', 'Password is mismatch');
                    }
                // }
            } else {
                return redirect()->back()->withInput($request->all())->with('error', "Invalid credinational");
            }
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->withInput($request->all())->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    /**
     * Admin Login Attempt
     */

    // public function admin_login_attempt(Request $request)
    // {
    //     // validate the form if user has empty form
    //     $validate = Validator::make($request->all(), [
    //         'email' => 'required|min:4|max:50|exists:users',
    //         'password' => 'required'
    //     ]);
    //     if ($validate->fails()) {
    //         return Redirect::back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
    //     }

    //     try {
    //         // find User from our records
    //         $userfind = User::where('email', $request->email)->first();
    //         if ($userfind) {
    //             $userRoles = $userfind->roles->pluck('name','name')->all();
    //             if(in_array("admin", $userRoles) || in_array("super-admin", $userRoles)){
    //                 if (Hash::check($request->password, $userfind->password)) {
    //                     // Password Matched

    //                     $remember_me = $request->remember ? true : false;
    //                     Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me);

    //                     // Auth::login($userfind);
    //                     if (Auth::check()) {
                            
    //                         $random_code = random_int(10000, 999999);

    //                         $userfind->verification_code = $random_code;
    //                         $userfind->verification_status = 0;
    //                         $userfind->save();

    //                         $details = [
    //                             'email' => $userfind->email,
    //                             'title' => 'Mail from '. env('APP_NAME'),
    //                             'url' => route('login.verification'),
    //                             'body' => 'Here is your login verification code:',
    //                             'verification_code' => $random_code
    //                         ];

    //                         // dispatch(new SendVerificationCodeEmailJob($details));
    //                         // Mail::to([$userfind->email])->send(new LoginVerificationCodeMail($details));

    //                         return redirect()->route('dashboard');
    //                     } else {
    //                         return redirect()->back()->withInput($request->all())->with('error', 'Authentication Error');
    //                     }
    //                 } else {
    //                     return redirect()->back()->withInput($request->all())->with('error', 'Password is mismatch');
    //                 }
    //             }else{
    //                 return redirect()->back()->withInput($request->all())->with('error', "Invalid credinational");
    //             }
    //         } else {
    //             return redirect()->back()->withInput($request->all())->with('error', "Invalid credinational");
    //         }
    //     } catch (\Throwable $th) {
    //         // throw $th;
    //         return redirect()->back()->withInput($request->all())->with('error', "Request Failed:" . $th->getMessage());
    //     }
    // }


    /** 
     * 
     *  if the User is log out 
     *  And go the login verfication it check 
     *  whether the Auth is login or not
     *      
     */

    public function login_verification()
    {
        if (Auth::user() && Auth::user()->verification_status == 0) {
            return view('auth.verification');
        } else {
            return redirect()->route('dashboard');
        }
    }

    /**
     * 
     *    Log out the User 
     * 
     */

    public function logout()
    {
        try {
            $user = User::find(Auth::user()->id);
            $user->verification_code = random_int(10000, 999999);
            $user->verification_status = 0;
            $user->save();
            Auth::logout();
            return Redirect::route('login');
        } catch (\Throwable $th) {
            return Redirect::back();
        }
    }

    /**
     * 
     * Verify the Account
     * 
     */

    public function verify_account(Request $request)
    {
        // dd($request->code);
        $validate = Validator::make($request->all(), [
            'code' => 'required|min:4|max:20',
        ]);

        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $user = User::where('email', Auth::user()->email)->where('verification_code', $request->code)->first();
            if ($user) {
                // User Found
                $user->verification_status = 1;
                $user->code_resend_count = 0;
                $user->save();
                return redirect()->route('dashboard')->with('success', 'Your Account Has Been Verified');
            } else {
                return redirect()->back()->withInput($request->all())->with('error', "Please Enter Valid Code");
            }
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->withInput($request->all())->with('error', "Request Failed:" . $th->getMessage());
        }
    }

    public function resend_code()
    {
        try {
            if (Auth::check()) {

                $user = User::find(Auth::user()->id);
                $user->verification_code = random_int(10000, 999999);
                $user->code_resend_count = $user->code_resend_count+1;
                $user->save();

                $details = [
                    'email' => $user->email,
                    'title' => 'Mail from '. env('APP_NAME'),
                    'url' => route('login.verification'),
                    'body' => 'Here is your login verification code:',
                    'verification_code' => $user->verification_code
                ];

                dispatch(new SendVerificationCodeEmailJob($details));

                return response()->json([
                    'message' => "Verfication code has been updated"
                ]);
            } else {
                return response()->json([
                    'error' => 'Authentication Error, please try again!'
                ],400);
            }
        }catch(Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
            // dd($e->getMessage());
        }
    }

    public function verification_verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->route('dashboard');
    }

    public function verification_notice()
    {
        return view('auth.verify-email');
    }

    public function verification_send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }
}
