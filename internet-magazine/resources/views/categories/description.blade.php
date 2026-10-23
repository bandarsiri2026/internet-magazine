@extends('layouts.master')

@section('content')

    <div class="container desc">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 desc-blade"
                 style=" font-size: 40px;
                padding: 10px;
                background-color: rgba(210, 196, 196, 0.25);
                border-radius: 16px;
                box-shadow: #EEE;
                box-shadow: 7px 11px rgba(119, 119, 119, 0.37);">
                {!! $categories->description !!}


            </div>



            <!-- /.col-md-8 -->
        </div>
        <div class="text-center flesh"><i class="fa fa-arrow-down" aria-hidden="true"></i>
        </div>
        <div class="text-center cats-flesh">

            <span class="text-center"><a href="{{url('/categories')}}" class="btn btn-primary">Все Категории</a></span>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

@endsection