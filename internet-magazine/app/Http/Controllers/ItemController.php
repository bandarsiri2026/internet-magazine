<?php

namespace App\Http\Controllers;
use App\Item;
use TCG\Voyager\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{



    public function show($id,Request $request) {


            $categories = Category::where('id', '=', $id)->paginate(6);
            if (strpos($_SERVER['REQUEST_URI'], "?sort=ASC") !== false){
                $items = Item::where('cat_id','=', $id)->orderBy('price' , 'asc')->paginate(6);

            }elseif (strpos($_SERVER['REQUEST_URI'], "?sort=DESC") !== false){
                $items = Item::where('cat_id','=', $id)->orderBy('price' , 'desc')->paginate(6);
            }else{
                $items = Item::where('cat_id','=', $id)->orderBy('created_at' , 'desc')->paginate(6);
            }



        


            return view('items.items', compact('categories', 'items'));
        }

        public function index(Request $request){
            $s=$request->input('s');

            $items = Item::latest()->search($s)->paginate(6);

            return view('items.index' , compact('items' , 's'));

        }

}
