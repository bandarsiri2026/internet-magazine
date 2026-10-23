<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Item;
use App\Mail\MailClass;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Category;

class OrderSetting extends Controller
{
    public function send_form(ContactRequest $request,$cat_id,$id)
    {
        $a =round(date("dh"))*$id;
        $name = $request->slug;
        $email = $request->email;
        $telephone = $request->telephone;
        $city = $request->city;
        $msg = $request->msg;
        $nn = Item::where('id',$id)->pluck('slug');
        $urlImage = str_replace("/order","", url()->current());
        $price = $request->price;
        $total = $request->total;


        Mail::to('maya-pochta@gmail.com')->send(new OrderMail($a,$name, $email, $telephone,$city, $msg , $nn,$urlImage,$price,$total));
        session()->flash('success' , 'СПАСИБО! Ваш заказ принят.В ближайшее время с Вами свяжется наш менеджер для уточнения данных. Удачного дня.');
        return redirect()->back();

    }
    public function show($id, $cat_id) {


        $categories = Category::where('id', '=', $cat_id)->get();

        $items = Item::where('cat_id','=', $id)->get();


        return view('items.items', compact('categories', 'items'));
    }
}
