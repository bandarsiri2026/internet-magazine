<div class="container index-cat">
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid text-center i-cat-index">
                <h1><i class="fa fa-tags" aria-hidden="true"></i><a href="{{url('categories')}}" class="btn btn-primary" role="button">Категории</a></h1>
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                <div class="row cat-under-slide">
                    <ul class="list-unstyled ">
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
                @foreach($categories as $cat)
                    <div class="col-sm-6 col-md-3">
                        <a href="{{'categories/' .$cat->id.'/items'}}">
                        <div class="thumbnail">
                            <img src="{{asset ('storage/' . $cat->image)}}" alt="..." class="cat-images">
                            <div class="caption">
                                <h4><a href="{{'categories/' .$cat->id.'/items'}}">{{$cat->name}}</a></h4>
                        </a>

                                <a href="{{url('categories/' . $cat->id . '/items')}}" class="btn btn-danger" role="button">Посмотри коллекцию »</a>




                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</div>
