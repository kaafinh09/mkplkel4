<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class cobacontroller extends Controller
{
    public function show(){
        $db_all = buku::all();
        return view('welcome',compact("db_all"));
    }
    
    
    
    
    
    
    //
}
