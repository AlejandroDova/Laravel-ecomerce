@extends('welcome')
@section('title', 'Home')

@section('content')


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('/static/imagenes/descuento.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{url('/static/imagenes/carro2.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{url('/static/imagenes/carro3.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="slifercontent">
  <h1>Artículos destacados</h1>
  <div class="container mt-4"></div>
  <div class="owl-carousel">
      @foreach ($destacado as $pro)
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
  





<div class="slifercontent">
  <h1>Ofertas</h1>
  <div class="container mt-4"></div>
  <div class="owl-carousel">
    @foreach ($oferta as $pro)
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
  

<div class="slifercontent">
  <h1>Alebrijes</h1>
  <div class="container mt-4"></div>
  <div class="owl-carousel">
    @foreach ($alebrijes as $pro)
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






<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    checkVisible: false,
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