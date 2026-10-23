<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class CatController extends Controller
{
    public function show($id ){
        $desc = Category::query()->find($id);
        return view('categories.description',['categories' => $desc]);
    }

    public function index(){
        $categories = Category::all();
        return view('categories.categories', compact('categories'));

    }

}
