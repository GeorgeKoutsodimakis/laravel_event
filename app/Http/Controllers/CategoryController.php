<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;

class CategoryController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
        $this->category = new Category;
    }

    public function index(Category $category){
        $category = Category::all();
        return view('categories.index',compact('category'));
    }

    public function create(){
        return view('categories.index');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required|min:3|max:15'
        ]);

        $category = Category::create([
            'user_id'=>auth()->id(),
            'title' => request('title')
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category.index');
    }


}
