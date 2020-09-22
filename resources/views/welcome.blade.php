<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/968653c222.js" crossorigin="anonymous"></script>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&display=swap" rel="stylesheet">


        <script type="text/javascript" src="{{ url('/static/js/sliderProduct.js')}}"></script>
        <script type="text/javascript" src="{{ url('/static/js/Cart.js')}}"></script>

        <link rel="stylesheet" href="{{ url('/static/css/sliderProduct.css') }}">
        <link rel="stylesheet" href="{{ url('/static/css/Welcome.css')}}">
        <link rel="stylesheet" href="{{ url('/static/css/carrito.css')}}">
        <link rel="stylesheet" href="{{ url('/static/css/viewProducto.css')}}">

        <!--Estos archivos se obtubieron de https://owlcarousel2.github.io/OwlCarousel2/demos/demos.html-->
        <link rel="stylesheet" href="{{ url('/static/css/owl/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url('/static/css/owl/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ url('/static/css/owl/owl.theme.default.min.css') }}">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="{{url('/')}}">Meraki</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto">
                    <a class="nav-link" href="{{url('nosotros')}}">Nosotros <span class="sr-only">(current)</span></a>
                </div>
                
                <div class="navbar-nav mr-auto ml-auto">
                    {!! Form::open(['url' => '/search']) !!}
                    

                    <div class="form-inline">
                        <div class="col-md-3">
                            {!! Form::select('category',$cats,4,['class' => 'custom-select']) !!}
                        </div>
                            {!! Form::search('name',null,['class' => 'form-control mr-sm-2']) !!}
                            {!! Form::submit('Buscar',['class' => 'btn  my-2 my-sm-0']) !!}
                    </div>
                {!! Form::close() !!}

                    
                </div>

                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="{{ url('/compra/carrito/mostrar') }}"><i class="fas fa-shopping-cart"></i></a>
                    
                    @if (Route::has('login'))
                        @auth
                            <a class="nav-link" href="{{ url('/logout') }}">Cerrar sesion</a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif
                </div> 
            </div>
          </nav> 
           
          
        @section('content')
        @show

          
    </body>
    
    <footer>
            <div class="contacto">
              <p>Teléfono: (+52)614-548-08-62</p>
              <p>Si quieres información sobre cualquiera de nuestros productos o estás interesado en el manejo de nuestra mercancía, <a href="{{url('/nosotros')}}">envíe un correo</a> y nos pondremos en contacto contigo lo antes posible.</p>
              <hr>
              <div class="abajo">
                  <p><a href="{{url('/faq')}}">Preguntas frecuentes</a></p>
                  <p>© 2020 Meraki| Hecho por Developer Meraki |</p>
              </div>            
          </div>
    </footer>
</html>
