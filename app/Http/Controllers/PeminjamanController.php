<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        return view('peminjam.peminjaman.index');
    }

    public function create(){
        $peminjaman = Peminjaman::all();
        return view('peminjaman.peminjaman.create', compact('peminjaman'));
    }
    
    
}
  
    

