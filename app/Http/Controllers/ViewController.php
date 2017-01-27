<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Home;
use App\Kategori;

class ViewController extends Controller
{
    //
	public function index()
    {
    	
    	$home = Home::all();
        $kategori = Kategori::all();
    	
    	return view('welcome',['home' => $home , 'kategori' => $kategori]);
    }

    public function produk($id)
    {
    	$kategori = Kategori::find($id);
        $home = $kategori->home;
        
        return view('produk', ['kategori' => [ $kategori ],'home' => $home,]);

      	//return view('produk', ['kategori' => $kategori ]);
    }
}
