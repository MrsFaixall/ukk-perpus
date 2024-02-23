<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $category_data = Category::all(); 
        return view('admin.category.index', compact('category_data'));
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request){
        $category = Category::find($request->id)->update([
            'name' => $request->name
        ]);
        return redirect('/category');
    }

    public function create(){
       
        return view('admin.category.create');
    }

    public function destroy($id){
        
        Category::find($id)->delete();
        return redirect('/category');
    }

    public function store(Request $request){
        Category::create([
            'name' => $request->name,

        ]);
        return redirect('/category');
    }
}
