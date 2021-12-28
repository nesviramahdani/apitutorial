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
        $email    = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if($user->password === $password){
          return response()->json([
              'pesan' => 'login berhasil',
              'data'  => $user
          ]);
        }
        else{
            return response()->json([
                'pesan' => 'login gagal',
                'data'  => ''
            ]);
        }
    }

    

}