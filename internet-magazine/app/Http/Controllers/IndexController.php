<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class IndexController extends Controller
{
    public  function index(){
        $listCat = Category::all();


        return view('index' , ['categories' => $listCat]);
    }
}
