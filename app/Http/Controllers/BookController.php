<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::with(['category'])->get();
        return view('admin.book.index', compact('books'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.book.create', compact('categories'));
    }

    public function store(Request $request){
        
        $book = Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'category_id' => $request->category_id,
        ]);

        return redirect('/book');
    }
    public function destroy($id){
        $hapus_buku = Book::find($id)->delete();
        return redirect('/book');
    }
    public function edit($id){
        $book = Book::find($id);
        $categories = Category::all();
        return view('admin.book.edit', compact('book','categories'));
    }

    public function update(Request $request){
        $update_book = Book::find($request->id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'category_id' => $request->category_id
        ]);
        return redirect('book');
    }
}
