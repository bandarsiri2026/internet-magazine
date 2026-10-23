@extends('layouts.master')

@section('content')

    <div class="container ">


        <div class="row">
            <?php $sort ='DESC';?>
            <div class="dropdown sort-price-li">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Сортировка:
                    <span class="caret"></span></button>
                <ul class="dropdown-menu sort-price-ul ">
                    <li><a class=" <?php if($sort == 'DESC'){echo 'active';}?>" href="?sort=DESC">от дорогих</a></li>
                    <li><a class=" <?php if($sort == 'ASC'){echo 'active';}?>" href="?sort=ASC">от дешевых</a></li>
                </ul>
            </div>






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
            {{$items->links()}}
        </div>

        <div class="text-center flesh"><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
        <div class="text-center cats-flesh">

            <span class="text-center"><a href="{{url('/categories')}}" class="btn btn-primary">Все Категории</a></span>
            <span class="text-center"><a href="{{url('categories/items')}}" class="btn btn-primary">Все подкатегории</a></span>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

@endsection