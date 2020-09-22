@extends('admin.master')
@section('title', 'Categories')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('admin/categories')}}"><i class="fas fa-hashtag"></i> Categories</a>
</li>
<li class="breadcrumb-item">
    <a href="{{url('admin/categories/add')}}"><i class="fas fa-edit"></i> Editar categoria</a>
</li>

@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow" id="panel">
        <div class="header">
            <h2 class="title"><i class="fas fa-edit"></i> Editar categoria</h2>
        </div>

        <div class="inside">

            {!! Form::open(['url' => '/admin/categories/'.$cat->id.'/edit']) !!}
            <label for="price"> Nombre de la categoria</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-hashtag"></i></span>
                </div>
                {!! Form::text('name', $cat->name, ['class' => 'form-control', 'required'])!!}
            </div>
                
            {!! Form::submit('Ingresar',['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection