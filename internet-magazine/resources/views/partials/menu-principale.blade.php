<nav class="navbar navbar-inverse ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hvr-wobble-horizontal site-brand" href="{{url('/')}}"><img width="370" height="230" src="{{asset('storage/logo-internet-magazin.png')}}" title="Главная"></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse my-menu" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=" service"><a href="{{url('service')}}">O нас<span class="sr-only">(current)</span></a></li>
                <li class=" news"><a href="{{url('news')}}">доставка и оплата <span class="sr-only">(current)</span></a></li>
                <li class="contact" ><a  href="{{url('contact')}}">Контакты</a></li>
                <li class="dropdown">
                    <a href="{{url('categories')}}" class="dropdown-toggle cats-navbar-index" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Категории <span class="caret"></span></a>
                    <ul class="dropdown-menu telephone-fixed">

                        <li><a href="{{url('categories/'. 1 .'/items')}}">брюки и джинсы</a></li>
                        <li><a href="{{url('categories/'. 2 .'/items')}}">лосины</a></li>
                        <li><a href="{{url('categories/'. 3 .'/items')}}">майки и футболки</a></li>
                        <li><a href="{{url('categories/'. 4 .'/items')}}">блузки и рубашки</a></li>
                        <li><a href="{{url('categories/'. 5 .'/items')}}">платья и сарафаны</a></li>
                        <li><a href="{{url('categories/'. 6 .'/items')}}">спортивные костюмы</a></li>
                        <li><a href="{{url('categories/'. 7 .'/items')}}">шорты</a></li>
                        <li><a href="{{url('categories/'. 8 .'/items')}}">пиджаки</a></li>

                    </ul>
                </li>
            </ul>

            <form class="navbar-form text-center"  action="{{url('categories/items')}}" method="get" >

                <div class="input-group search">
                    <input type="text" name="s"  value="{{isset($s) ? $s : ''}}" class="form-control" placeholder="Найти">
                </div>
                <input type="submit" class="btn btn-default text-center telephone-submit" value="Найти">
            </form>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    @if(isset($details))

    <table class="table ">
        <thead>
        <tr>
            <th><h1>Name</h1></th>
            <th><h1>Description</h1></th>
        </tr>
        </thead>
        <tbody>
@foreach($details as $item)
        <tr>
            <td><h2>{{$item->name}}</h2></td>
                    <td>{!! $item->description !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
        </div>

