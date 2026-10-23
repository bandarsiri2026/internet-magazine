@extends('layouts.master')

@section('content')
    <div class="container contactus">
        <div class="row">
            @if(session()->has('success'))

                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>

             @endif

            <h1 class="text-center">Отправка Сообщения</h1>
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

            </div>
                <div class="col-md-6 textarea-i">
                    <i class="fa fa-comment-o msg" aria-hidden="true"></i>
                    {{Form::label('Сообщение', 'Сообщение:', ['class' => 'awesome'])}}
                     {{ Form::textarea('msg', null, ['class' => 'form-control','placeholder'=>'Сообщение']) }}

                    <input value="Отправить" type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> </input>

                </div>
                {!! Form::close() !!}
                </div>

        </div>
    </div>





@endsection