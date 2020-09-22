@extends('connect.master')

@section('title', 'login')

@section('content')


<div class="box box_login">

    <div class="header">
        <a href="{{url('/')}}">
            <img src="{{ url('/static/imagenes/Meraki.png') }}" alt="">
        </a>
    </div>
    <div class="inside">
        {!! Form::open(['url' => '/login']) !!}
    <label for="email"> Correo electronico</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
        {!! Form::email('email', null, ['class' => 'form-control', 'required'])!!}
    </div>

    <label for="email" class="mtop16"> Contraseña</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-key"></i></div>
        </div>
        {!! Form::password('password', ['class' => 'form-control','required'])!!}
    </div>
    
    {!! Form::submit('Ingresar',['class' => 'btn btn-success mtop16']) !!}

    @if(Session::has('message'))
    <div class="container, mtop16">
        <div class="alert alert-{{ Session::get('typealert')}}" style="display:none;">
            {{ Session::get('message') }}
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <script>
                $('.alert').slideDown();
                setTimeout(function(){ $('.alert').slideDown();},3000);
            </script>
        </div>
    </div>
@endif

    <div class="footer">
        <a href="{{ url('/register') }}">En caso de no contar con una cuenta, registrate</a>
    </div>

    </div>
    
    
    {!! Form::close() !!}
</div>
@stop