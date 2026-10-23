<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;


class OrederController extends Controller
{
    public function show($id ,$cat_id){

        $cat = Category::where('id', '=', $cat_id)->get();

        $item = Item::query()->where('id', '=', $cat_id)->get();



        return view('order',compact('cat','item'));
    }
    public function index($id ,$cat_id){

        $cat = Category::where('id', '=', $cat_id)->get();

        $items = Item::query()->where('id', '=', $cat_id)->get();



        return view('items.itemfromorder',compact('cat','items'));
    }

}
