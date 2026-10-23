@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            @if(session()->has('success'))

                <div class="alert alert-danger">
                    {{session()->get('seccess')}}
                </div>

            @endif
            <div class="col-md-8 col-md-offset-2">
                <p>Спасибо вам письмо отправлено</p>
            </div>

        </div>

    </div>


@endsection