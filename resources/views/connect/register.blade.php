@extends('connect.master')

@section('title', 'Register')

@section('content')


<div class="box box_register">

    <div class="header">
        <a href="{{url('/')}}">
            <img src="{{ url('/static/imagenes/Meraki.png') }}" alt="">
        </a>
    </div>
    <div class="inside">
        {!! Form::open(['url' => '/register']) !!}
        <label for="name"> Nombre</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></i></div>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'required' ])!!}
        </div>

        <label for="lastname" class="mtop16"> Apellido </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user-tag"></i></i></i></div>
            </div>
            {!! Form::text('lastname', null, ['class' => 'form-control', 'required'])!!}
        </div>


    <label for="email" class="mtop16"> Correo electronico</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
        {!! Form::email('email', null, ['class' => 'form-control', 'required'])!!}
    </div>

    <label for="password" class="mtop16"> Contraseña</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-key"></i></div>
        </div>
        {!! Form::password('password', ['class' => 'form-control', 'required'])!!}
    </div>

    <label for="cpassword" class="mtop16"> Contraseña</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-key"></i></div>
        </div>
        {!! Form::password('cpassword', ['class' => 'form-control', 'required'])!!}
    </div>

    {!! Form::submit('Ingresar',['class' => 'btn btn-success mtop16']) !!}


    @if(Session::has('message'))
    <div class="container, mtop16">
        <div class="alert alert-danger" style="display:none;">
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
            <a href="{{ url('/login') }}">Logearte</a>
        </div>

    </div>
    
    
    {!! Form::close() !!}
</div>
@stop