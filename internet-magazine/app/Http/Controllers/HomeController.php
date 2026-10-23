<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search($text){


        $item = Item::where('name','LIKE','%'.$text.'%')->orWhere('description','LIKE','%'.$text.'%')->get();
        dd($item);
    }
}
