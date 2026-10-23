@extends('layouts.master')

@section('content')
    <div class="container contactus">
        <div class="row">
            @if(session()->has('success'))

                <div class="alert alert-success msg-success">
                    {{session()->get('success')}}
                    @foreach($item as $i)
                      <h3>Номер Заказа :</h3> <span><?php echo round(date("dh"))*$i->price*$i->id; ?></span>
                    @endforeach
                    <br> <p>перенаправление на главную страницу через 15 секунд ...</p>
                </div>

                <script>
                    var timer = setTimeout(function() {
                        window.location='http://localhost:8000/'
                    }, 15000);
                </script>

            @endif

            <h1 class="text-center">Оформление Заказа</h1>



            <?php $urlImage=str_replace("/order","", url()->current());

            ?>



            @if(count($errors))

                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>
                                {{$error}}
                            </li>
                        </ul>
                    @endforeach
                </div>

            @endif

            <div class="form-group">
                <div class="col-md-6 awsome">

                    {!! Form::open(array('method' => 'post')) !!}
                    <i class="fa fa-user-o name" aria-hidden="true"></i>

                    {{Form::label('Имя', ' Имя :', ['class' => 'awesome'])}}

                    <span class="star-name">*</span>
                    {{ Form::text('name', null,['class' => 'form-control','placeholder'=>'Ваше Имя']) }}
                    <i class="fa fa-envelope-open-o email" aria-hidden="true"></i>
                    {{Form::label('email', 'Электронная Почта :', ['class' => 'awesome'])}}
                    <span class="star-email">*</span>
                    {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Ваша электронная почта']) }}
                    <i class="fa fa-phone telephone" aria-hidden="true"></i>
                    {{Form::label('Телефон', 'Телефон :', ['class' => 'awesome'])}}
                    <span class="star-telephone">*</span>
                    {{ Form::text('telephone', null, ['class' => 'form-control','placeholder'=>'Ваш Телефон '] ) }}

                    {{Form::label('Город', 'Город :', ['class' => 'awesome'])}}
                    <select class="city form-control" name="city">
                        <option value="kharkov">Харьков</option>
                        <option value="kiev">Киев</option>
                        <option value="odessa">Одесса</option>
                        <option value="lvov">Львов</option>
                        <option value="poltava">Полтава</option>
                        <option value="zaparojie">Запарожье</option>
                        <option value="dnepro">Днепро</option>
                    </select>




                    <div class="textarea-order">
                        <i class="fa fa-comment-o msg-order" aria-hidden="true"></i>
                        {{Form::label('Сообщение', 'Сообщение:', ['class' => 'awesome'])}}
                        {{ Form::textarea('msg', null, ['class' => 'form-control','placeholder'=>'Сообщение']) }}

                        <input value="Отправить" type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> </input>
                    </div>

                </div>
                <div class="col-md-offset-2 col-md-4">
                    @foreach($item as $i)
                        <?php$photo=?> <img src="/storage/{{  $i->image}}" style="height:200px ; width:200px">
                            <h3>{{$i->name}}</h3>
                            <span class="price-order" >{{$i->price}} </span>
                            <span class="griven-order">грн</span>
                            <input class="price-order" title="total" type='text' name='total' id='total' value='{{$i->price}}' disabled/>
                            <span class="ordering">{{$i->ordering}} </span>

                            <h4>Количество :</h4>

                            <input title="price"type='text' name='price' id='price' value='{{$i->price}}' hidden/>


                            <input type="text" name="qty" id="qty" class="inputbox input-order" value="1"/>
                            <input class="product_minus" type="button"  id="m" value="-" onclick="
                            var qty_el = document.getElementById('qty');
                            var qty = qty_el.value;
                            if( !isNaN( qty ) &amp;&amp; qty > 1) qty_el.value--;return false;">
                                            <input class="product_plus" type="button" id="p" value="+" onclick="
                            var qty_el = document.getElementById('qty');
                            var qty = qty_el.value;
                            if( !isNaN( qty )) qty_el.value++;return false;"/>




                    @endforeach



                </div>
                {!! Form::close() !!}






            </div>

        </div>
    </div>





@endsection