@extends('welcome')
@section('title', 'Producto')

@section('content')
@if (count($cart))
<table class="table">
  <thead>
      <tr>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th> 
        <th scope="col">Descuento</th>
        <th scope="col">Total de descuento</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($cart as $item)
      <tr>
          <td> <img src="{{ asset('storage').'/'.$item->image }}" alt="Imagen"></td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->amount }}</td>
          <td>{{ $item->in_discount }}</td>
          <td>{{ $item->discount }}</td>
          <td> <a href="{{ url('/compra/carrito/eliminarItem/'.$item->id) }}" data-toggle="tooltip" title="Eliminar" data-placement="top"><i class="fas fa-trash"></i></a></td>
      </tr>
      @endforeach
    </tbody>
</table>

@else:
<div class="Dnohay">
  <h3><span class="nohay">No hay productos en el carrito</span></h3>
  <img class="imgtriste" src="{{ url('/static/imagenes/triste.png') }}" alt="">
</div>

@endif

<div class="buttons-group">
  <a href="{{url('/compra/procesodepago')}}" class="btn-carrito" >Volver a la tienda</a>
  <a href="{{url('/compra/procesodepago')}}" class="btn-carrito" >Proceder al pago</a>
  <a href="{{url('/compra/carrito/borrarCarrito')}}" class="btn-carrito"  >Vaciar carrito</a>  
</div>


@endsection