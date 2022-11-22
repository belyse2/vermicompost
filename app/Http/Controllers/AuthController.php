<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\FAcades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function register(Request $request){


        // validating  body request


        $fields = $request->validate([
            'firstname' => 'required|string',
            'lastname'  => 'required|string',
            'location'  => 'required|string',
            'gender'    => 'required|string',
            'email'     => 'required|string|unique:users,email',
            'password'  => 'required|string|confirmed'
        ]);



// this create user

        $user = User::create([

            'firstname' => $fields['firstname'],
            'lastname' => $fields['lastname'],
            'email' => $fields['email'],
            'location' => $fields['location'],
            'gender' => $fields['gender'],
            'password' => bcrypt($fields['password'])
        ]);
// user taking key token
        $token = $user->createToken('myapptoken')->plainTextToken;
        
// user information in response        

        $response = [
            'user'=>$user,
            'token'=>$token
        ];
 
        return response($response, 201);
    }
    
    public function login(Request $request){


        // validating  body request


        $fields = $request->validate([
            
            'email'     => 'required|string|unique:users,email',
            'password'  => 'required|string|confirmed'
        ]);



// check email
        $user = User::where('email', $fields(['email'])->first());
    

//check password

        if(!user || !Hash::check($fields['password'], $user->password)){
            return response(['message' => 'Bad creds'], 401);
        }
// user taking key token
        $token = $user->createToken('myapptoken')->plainTextToken;
        
// user information in response        

        $response = [
            'user'=>$user,
            'token'=>$token
        ];
 
        return response($response, 201);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Loged out'
        ];
    }
}
