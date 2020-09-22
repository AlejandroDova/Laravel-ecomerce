@extends('admin.master')
@section('title', 'Categories')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('admin/categories')}}"><i class="fas fa-hashtag"></i> Categories</a>
</li>
<li class="breadcrumb-item">
    <a href="{{url('admin/categories/add')}}"><i class="fas fa-plus-square"></i> Agregar Categoria</a>
</li>

@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow" id="panel">
        <div class="header">
            <h2 class="title"><i class="fas fa-plus-square"></i> Agregar Categoria</h2>
        </div>

        <div class="inside">
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
                            setTimeout(function(){ $('.alert').slideDown();},1000);
                        </script>
                    </div>
                </div>
            @endif

            {!! Form::open(['url' => '/admin/categories/add']) !!}
            <label for="price"> Nombre de la categoria</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-hashtag"></i></span>
                </div>
                {!! Form::text('name', null, ['class' => 'form-control', 'required'])!!}
            </div>
                
            {!! Form::submit('Ingresar',['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection