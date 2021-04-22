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

    public function update(Request $req)
    {
        
            $update = buku::find($req->id);
            $update->judul=$req->judul;
            $update->pengarang=$req->pengarang;
            $update->tahun=$req->tahun;
            $update->penerbit=$req->penerbit;
            $update->save();

            return redirect("/welcome");
    }



    public function detail($id)
    {$db = buku::where('id',$id)->first(); 
            return view('update',compact("db"));
}

public function stock($id)
    {
        $db = buku::where('id',$id)->first(); 
        return view('stock',compact("db"));
    }

    public function edit(Request $req)
    {
        
            $edit = buku::find($req->id);
            
            $edit->stok=$req->stock;
            $edit->save();
            return redirect("/welcome");
    }

    
}
