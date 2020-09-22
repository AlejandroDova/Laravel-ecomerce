@extends('admin.master')
@section('title', 'Categories')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('admin/categories')}}"><i class="fas fa-hashtag"></i> Categories</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow" id="panel">
        <div class="header">
            <h2 class="title"><i class="fas fa-hashtag"></i> Categories</h2>
        </div>

        <div class="inside">

            <div class="btns">
                <a href="{{url('admin/categories/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Agregar Categoria</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nombre</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                          
                      @foreach($cats as $cat)
                          <tr>
                              <td>{{ $cat->id }}</td>
                              <td>{{ $cat->name }}</td>
                              <td> <a href="{{ url('admin/categories/'.$cat->id.'/edit') }}" data-toggle="tooltip" title="Editar" data-placement="top"><i class="fas fa-edit"></i></a></td>
                              <td> <a href="{{ url('admin/categories/'.$cat->id.'/delete') }}" data-toggle="tooltip" title="Eliminar" data-placement="top"><i class="fas fa-trash"></i></a></td>
                          </tr>
                      @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection