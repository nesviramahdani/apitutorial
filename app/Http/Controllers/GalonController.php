<?php

namespace App\Http\Controllers;
use App\Models\Galon;
use Illuminate\Http\Request;
use App\Http\Controllers\Str;

class GalonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //menampilkan data
    public function index()
    {
        $galon = Galon::all();
        return response()->json([
            'pesan' =>'berhasil',
            'galon' =>$galon
        ],200);
    }

    //insert data
    public function create(Request $request){

        $data = $request->all();
        $book = Galon::create($data);

        return response()->json($book);

    }   
    //mencari data
    public function search($nama_galon){
        $galon = Galon::where('nama_galon', 'like', "%{$nama_galon}%")->get();
        return response()->json([
            'galon' =>$galon
        ]);
    }

   

   
    

    
}
