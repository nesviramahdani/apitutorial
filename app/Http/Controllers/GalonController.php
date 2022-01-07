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

        $this->validate($request,[
            'id' => 'required',
            'nama_galon' => 'required',
            'alamat_galon' => 'required',
            'telepon' => 'required',
            'bukaTutup' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'image' =>'requiredd',
     
        ]);

        //upload foto

        
        $add = Galon::create([
            'id' =>$id,
            'nama_galon' =>$nama_galon,
            'alamat_galon' =>$alamat_galon,
            'telepon' =>$telepon,
            'bukaTutup' =>$bukaTutup,
            'jumlah' =>$jumlah,
            'harga' =>$harga,
            'image' =>$image,

        ]);

        if($add){
            return response()->json([
                'status' =>"Berhasil Menambah Data",
                'data' =>$add
            ]);
        }else{
            return response()->json([
                'status' =>'Gagal Menambah Data',
                'data' =>null
            ]);
        }

    }   
   

    //mencari data
    public function search($nama_galon){
        $galon = Galon::where('nama_galon', 'like', "%{$nama_galon}%")->get();
        return response()->json([
            'galon' =>$galon
        ]);
    }

   

   
    

    
}
