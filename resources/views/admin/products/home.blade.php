@extends('admin.master')
@section('title', 'Products')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('admin/products')}}"><i class="fas fa-boxes"></i> Products</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow" id="panel">
        <div class="header">
            <h2 class="title"><i class="fas fa-boxes"></i> Products</h2>
        </div>

        <div class="inside">

            <div class="btns">
                <a href="{{url('admin/products/add')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Agregar producto</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">precio</th>
                      <th scope="col">Categoria</th>   
                      <th scope="col">imagen</th>
                      <th scope="col">Contenido</th>
                      <th scope="col">Descuento</th>
                      <th scope="col">Total de descuento</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($producto as $pro)
                    <tr>
                        <td>{{ $pro->id}}</td>
                        <td>{{ $pro->name }}</td>
                        <td>{{ $pro->amount }}</td>
                        <td>{{ $pro->category_id }}</td>
                        <td> <img src="{{ $pro->image }}" alt="Imagen"></td>
                        <td>{{ $pro->content }}</td>
                        <td>{{ $pro->in_discount }}</td>
                        <td>{{ $pro->discount }}</td>
                        <td> <a href="{{ url('admin/products/'.$pro->id.'/edit') }}" data-toggle="tooltip" title="Editar" data-placement="top"><i class="fas fa-edit"></i></a></td>
                        <td> <a href="{{ url('admin/products/'.$pro->id.'/delete') }}" data-toggle="tooltip" title="Eliminar" data-placement="top"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection