@extends('layouts.master')

@section('content')
    <!--star slider-->
    <div id="myslid" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myslid" data-slide-to="0" class="active"></li>
            <li data-target="#myslid" data-slide-to="1"></li>
            <li data-target="#myslid" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="brightness" src="images/01.jpg" alt="pic01">
                <div class="carousel-caption ">

                </div>
            </div>
            <div class="item">
                <img class="brightness"src="images/02.jpg" alt="pic02">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img class="brightness"src="images/03.jpg" alt="pic03">
                <div class="carousel-caption">

                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myslid" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myslid" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <!--end slider-->


    @include('partials.index')



@endsection