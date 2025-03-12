<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginrController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function login(Request $request)
    {
        // validate the form if user has empty form
        $rules = array(
            'email' => 'required|min:4|max:50|exists:users',
            'password' => 'required'
        );
        
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try {
            // find User from our records
            $user = User::where('email', $request->email)->first();
            
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    // Password Matched

                    $token = $user->createToken('token-name', ['server:update'])->plainTextToken;

                    $response = [
                        'user' => $user,
                        'token' => $token
                    ];

                    return response()->json($response, 201);
                } else {
                    $response = [
                        'message' => 'These credencials do not match our records.'
                    ];
                }
            } else {
                $response = [
                    'message' => 'The email is not match our records'
                ];
            }
        } catch (\Throwable $th) {
            // throw $th;
            $response = [
                'message' => 'Authentication Error:'.$th->getMessage()
            ];
        }
        return response()->json($response, 404);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
