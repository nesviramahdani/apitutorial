<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
public function register(Request $request)
    {
       $data =[
           'name'     =>$request->input('name'),
           'email'    =>$request->input('email'),
           'password' =>$request->input('password'),
           
       ];

       User::create($data);

       return response()->json($data);
    }


public function login(Request $request)
    {
          $this->validate($request,  [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
    
        $email    = $request->input('email');
        $password = $request->input('password');

   
    
   $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['message' => 'Login failed'], 401);
        }

        $isValidPassword = Hash::check($password, $user->password);
        if (!$isValidPassword) {
            return response()->json(['message' => 'Login failed'], 401);
        }
    }

    

}
