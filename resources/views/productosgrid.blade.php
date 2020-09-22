@extends('welcome')
@section('title', 'Productos')

@section('content')

<div class="container">
    
    <div class="card-deck" style="padding-right: 10px">

        @foreach ($productos as $pro)
        @if ($pro->in_discount == '1')
            <div class="item">
                <div class="slider-box">
                    <p class="time">Oferta</p>
                <div class="img-box">
                  <img src="{{ asset('storage').'/'.$pro->image }}" alt="no se ve">
                 </div>
                <p class="details">{{ $pro->name }}
                <strike><a href="" class="price tachado">Precio {{$pro->amount}}$</a></strike>
                <a href="" class="price">Precio con descuento {{$pro->amount - ($pro->amount * ($pro->discount/100)) }}$</a>
                </p>
                <div class="cart">
                  <a href="{{ url('productos/'.$pro->category_id.'/'.$pro->slug) }}">Ver producto</a>
                </div>
                </div>
            </div>
        @else
        <div class="item">
            <div class="slider-box">
            <div class="img-box">
              <img src="{{ asset('storage').'/'.$pro->image }}" alt="no se ve">
             </div>
            <p class="details">{{ $pro->name }}
            <a href="" class="price tachado">Precio {{$pro->amount}}$</a>   
            </p>
            <div class="cart">
                <a href="{{ url('productos/'.$pro->category_id.'/'.$pro->slug) }}">Ver producto</a>
            </div>
            </div>
        </div>
        @endif
        
        @endforeach
    </div>
</div>

@endsection