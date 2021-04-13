<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class bukuController extends Controller
{
    public function root()
    {
        return redirect('/welcome');
    }

    public function show(){
        $db_all = buku::all();
        return view('welcome',compact("db_all"));
    }

    public function create()
    {
        return view('create');
    }
    //
}
