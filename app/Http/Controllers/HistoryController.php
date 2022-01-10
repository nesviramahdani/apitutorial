<?php

namespace App\Http\Controllers;
use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Str;

class HistoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    
//history
public function insert(Request $req){
    $history = $req->all();
    $hist = History::create($history);

    return response()->json($hist);
}

    
}
