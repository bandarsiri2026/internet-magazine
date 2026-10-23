@extends('layouts.master')

@section('content')

    <div class="container index-cat">
        <div class="row">

            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="row cat-under-slide">
                        <ul class="list-unstyled text-center">
                            <li class="col-md-3"><a href="{{url('categories/'. 1 .'/items')}}" class="btn btn-primary">брюки и джинсы</a></li>
                            <li class="col-md-3"><a href="{{url('categories/'. 2 .'/items')}}"class="btn btn-primary">лосины</a></li>
                            <li class="col-md-3"><a href="{{url('categories/'. 3 .'/items')}}"class="btn btn-primary">майки и футболки</a></li>
                            <li class="col-md-3 li-bottom"><a href="{{url('categories/'. 4 .'/items')}}"class="btn btn-primary">блузки и рубашки</a></li>
                            <li class="col-md-3"><a href="{{url('categories/'. 5 .'/items')}}"class="btn btn-primary">платья и сарафаны</a></li>
                            <li class="col-md-3"><a href="{{url('categories/'. 6 .'/items')}}"class="btn btn-primary">спортивные костюмы</a></li>
                            <li class="col-md-3"><a href="{{url('categories/'. 7 .'/items')}}"class="btn btn-primary">шорты</a></li>
                            <li class="col-md-3"><a href="{{url('categories/'. 8 .'/items')}}"class="btn btn-primary">пиджаки</a></li>
                        </ul>
                    </div>
                </div>




                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-sm-6 col-md-3">
                            <a href="{{'categories/' .$category->id.'/items'}}">
                            <div class="thumbnail">
                                <img src="{{asset ('storage/' . $category->image)}}" alt="..." class="cat-images">
                                <div class="caption">
                                    <h4><a href="{{'categories/' .$category->id.'/items'}}">{{$category->name}}</a></h4>
                            </a>
                               



                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection