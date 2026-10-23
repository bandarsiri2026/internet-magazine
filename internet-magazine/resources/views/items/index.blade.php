@extends('layouts.master')

@section('content')

<div class="container index-cat">
    <div class="row">

        <div class="col-md-12">

            <h1>Подкатегории:</h1>


            <div class="row">
                @foreach($items as $item)
                    <div class="col-md-4 items-blade">
                        <img src="/storage/{{$item->image}}" class="img-thumbnail zoom_01"  alt="..."  data-large="/storage/{{$item->image}}">
                        <div class="caption">
                            <a href="{{'/categories/'.$item->cat_id.'/items/'.$item->id.'/order'}}" class="button btn btn-success order">Купить</a>
                            <h3>{{$item->name}}</h3>
                            <span class="price">{{$item->price }} <span class="griven">грн</span></span>


                        </div>
                    </div>


                @endforeach
            </div>
            <div class="text-center">
                {{$items->appends(['s' => $s])->links()}}
            </div>
        </div>

    </div>
</div>
@endsection