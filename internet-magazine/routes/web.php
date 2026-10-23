<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use AdvanceSearch\AdvanceSearchProvider\Search;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

/*Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $item = Item::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
    if(count($item) > 0)
        return view('layouts.master')->withDetails($item)->withQuery ( $q );
    else return view ('layouts.master')->withMessage('No Details found. Try to search again !');
});
/*Route::post('search' , function (Request $request){
    Search::search(
        "Item" ,
        ['name' , 'description'] ,
        $request->search,
        ['id','name' , 'description']
    );

});*/

Route::get('service' , function (){
    return view('service');
});
Route::get('news' , function (){
    return view('news');
});
Route::get('contact' , function (){
    return view('contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/' , 'IndexController@index');

Route::get('/categories/{id}/description' , 'CatController@show');
Route::get('/categories' , 'CatController@index');
Route::get('/categories/{id}/items' , 'ItemController@show');
Route::get('/categories/items' , 'ItemController@index');

Route::get('/categories/{cat_id}/items/{id}/order' , 'OrederController@show');

Route::get('/categories/{cat_id}/items/{id}' , 'OrederController@index');


Route::post('contact', 'MailSetting@send_form');

Route::post('/categories/{cat_id}/items/{id}/order', 'OrderSetting@send_form');


