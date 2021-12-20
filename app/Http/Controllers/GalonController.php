<?php

namespace App\Http\Controllers;
use App\Models\Galon;
use Illuminate\Http\Request;

class GalonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $galon = Galon::all();
        return response()->json([
            'pesan' =>'berhasil',
            'galon' =>$galon
        ],200);
    }

    public function create(Request $request){
        Galon::create($request->all());
        return response()->json($request);
    }

    public function search($nama_galon){
        $galon = Galon::where('nama_galon', 'like', "%{$nama_galon}%")->get();
        return response()->json([
            'galon' =>$galon
        ]);
    }
}
