<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EloquentController extends Controller
{
    public function getPostColumnSearch()
    {
        return view('layouts.master');
    }

    public function anyColumnSearchData(Request $request)
    {
        $items = Item::select([
            DB::raw("CONCAT(id,'-',users.id) as item_id"),
            'name',
            'description',

        ]);

        return Datatables::of($items)
            ->filterColumn('user_id', function($query, $keyword) {
                $query->whereRaw("CONCAT(id,'-',users.id) as item_id) like ?", ["%{$keyword}%"]);
            })
            ->make(true);
    }


}
