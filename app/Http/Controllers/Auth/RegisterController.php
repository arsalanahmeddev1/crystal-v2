<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Exception;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return redirect()->route('dashboard');
    //     // return User::create([
    //     //     'name' => $data['name'],
    //     //     'email' => $data['email'],
    //     //     'password' => Hash::make($data['password']),
    //     // ]);
    // }
    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('auth.register');
        }
    }

    protected function register_attempt(Request $request){
    
        $validate = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'password_confirmation' => 'required|same:password',
            'agreed_with_privacy' => 'required|string|max:255',
        ]);
        if($validate->fails()){
            return Redirect::back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try{
            // Begin a transaction
            DB::beginTransaction();

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
    
            $user->syncRoles('user');

            // Attempt to authenticate
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            
            if (Auth::check()) {

                VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
                    return (new MailMessage)
                        ->subject('Verify Email Address')
                        ->line('Click the button below to verify your email address.')
                        ->action('Verify Email Address', $url);
                });
            }
    
            $user->sendEmailVerificationNotification();
    
            // Commit the transaction
            DB::commit();

            return redirect()->route('login')->with('success','Your account has been created successfully.');
        } catch (\Throwable $th) {
            DB::rollback();

            // Log the error for debugging
            Log::error('User registration failed', ['error' => $th->getMessage()]);
            return redirect()->back()->withInput($request->all())->with('error', "Request Failed:" . $th->getMessage());
            // throw $th;
        }
    }
    
}
