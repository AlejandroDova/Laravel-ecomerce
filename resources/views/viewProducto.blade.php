@extends('welcome')
@section('title', 'Producto')

@section('content')
    
@foreach ($productos as $pro)
<div class="contentmaster">
  <div class="divA">
      <img src="{{asset('storage').'/'.$pro->image}}" alt="">
  </div>
  <div class="divB">
      <div class="contentDivb">
          <p class="titulo">{{$pro->name}}</p>    
          <p class="precios">El precio es total es de: {{$pro->amount - ($pro->amount * ($pro->discount /100))}}</p>
          <p>{{ $productos[0]->content}}</p>

          <a href="{{url('compra/carrito/agregar/'.$pro->id)}}" class="btn-carrito" >Añadir el carrito</a>
          
      </div>
  </div>
</div>
@endforeach




  

<script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      autoplay:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:false
          },
          1000:{
              items:4,
              nav:true,
              loop:false
          }
      }
    })
    }); 
  </script>
  
  <script src="{{url('/static/js/owl.carousel.js')}}"></script>
  <script src="{{url('/static/js/owl.carousel.min.js')}}"></script>
    

@endsection