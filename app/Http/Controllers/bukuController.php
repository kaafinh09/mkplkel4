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
    public function destroy($id)
    {
        
            $delete = buku::destroy($id); 

            return redirect("/welcome");
    }

    public function add(Request $req)
    {
        

            $add = new buku;
            $add->judul=$req->judul;
            $add->pengarang=$req->pengarang;
            $add->tahun=$req->tahun;
            $add->penerbit=$req->penerbit;
            $add->stok=$req->stock;
            $add->save();

            return redirect("/welcome");
    }



    //
}
