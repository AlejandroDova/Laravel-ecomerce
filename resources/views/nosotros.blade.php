<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/static/css/nosotros.css') }}">
     <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/968653c222.js" crossorigin="anonymous"></script>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Nosotros</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{url('/')}}">Meraki</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav mr-auto">
                <a class="nav-link" href="{{url('nosotros')}}">Nosotros</a>
            </div>         
        </div>
      </nav>

    <div class="presentacion">
        <h1>México en la piel </h1>
        <img src="{{ url('/static/imagenes/pruebitaimgdos.jpg') }}" alt="">
    </div>

    <div class="Quehacemos">
        <h1>Sobre nosotros.</h1>
        <p>Somos una empresa dedicada a la venta de artesanías, que apoya la economía de los artesanos indígenas de México y a su vez da a conocer la cultura de las etnias residentes del país. Estamos dirigidos a aquellas personas que aprecien el arte tradicional, a los cuales les brindaremos un servicio al cliente que conteste a todos sus dudas, y que los acompañe desde el pedido hasta la entrega, con el fin se asegurar su plena satisfacción.</p>
    </div>

    <hr>

    <div class="filosofia">
      <h1>Filosofía</h1>
      <div class="card-deck" style="padding: 20px;">
            <div class="card" style="width: 18rem; box-shadow: 2px 2px 5px #E67CAD;  font-family: 'Raleway', sans-serif; ">
              <div class="card-body" >
                <h5 class="card-title">Compromiso</h5>
                <p class="card-text">Nos comprometemos a que el producto sea de calidad y entregado en el tiempo establecido.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; box-shadow: 2px 2px 5px #E67CAD;  font-family: 'Raleway', sans-serif; ">
              <div class="card-body" >
                <h5 class="card-title">Honestidad</h5>
                <p class="card-text">Nuestros productos son 100% de México para el mundo.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem; box-shadow: 2px 2px 5px #E67CAD;  font-family: 'Raleway', sans-serif; ">
              <div class="card-body" >
                <h5 class="card-title">Inclusión</h5>
                <p class="card-text">Nos comprometemos a darles un trato digno a nuestros socios.</p>
              </div>
            </div>
        </div> 
        
        <div class="card-deck" style="padding: 20px;">
          <div class="card" style="width: 18rem; box-shadow: 2px 2px 5px #E67CAD;  font-family: 'Raleway', sans-serif; ">
            <div class="card-body" >
              <h5 class="card-title">Respeto</h5>
              <p class="card-text">Nuestra empresa siempre hablará de forma asertiva a nuestros empleados, clientes </p>
            </div>
          </div>
          <div class="card" style="width: 18rem; box-shadow: 2px 2px 5px #E67CAD;  font-family: 'Raleway', sans-serif; ">
            <div class="card-body" >
              <h5 class="card-title">Responsabilidad</h5>
              <p class="card-text">Meraki se compromete a cumplir los estándares y normas aplicables en la venta de nuestro producto. </p>
            </div>
          </div>
          <div class="card" style="width: 18rem; box-shadow: 2px 2px 5px #E67CAD;  font-family: 'Raleway', sans-serif; ">
            <div class="card-body" >
              <h5 class="card-title">Equidad</h5>
              <p class="card-text">Meraki se compromete a tratar a todos por igual, independiente de su clase social, raza, sexo o religión.</p>
            </div>
          </div>
      </div>    
    </div>


    <hr>

    
    <div class="mv">
      <h1>¿Quiénes somos?</h1>
        <div class="mision">
            <h2>Visión </h2>
            <p>Ser reconocidos como una de las principales empresas expositoras de cultura mexicana internacionalmente, como por su servicio, calidad de sus productos y sobre todo en la satisfacción plena de todos nuestros clientes, gracias a la capacidad de nuestra gente y tecnología implementada. </p>
        </div>
        <div class="vision">
            <h2>Misión </h2>
            <p>Somos una empresa socialmente responsable, que en conjunto con las diferentes etnias del estado promovemos su arte y cultura al mundo, a través de nuestro sitio web con el fin de mantener su preferencia mediante productos que honren la cultura mexicana.</p>
        </div>
    </div>

    <hr>
    
    <div class="equipo">
      <h1>Equipo</h1>
      <div class="card-group">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{url('/static/imagenes/Naylea.jpeg')}}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" >
                  <h5 class="card-title">Naylea Tinajero Del Castillo</h5>
                  <p class="card-text" ><small  class="text-muted">Líder y gerente
                    de proyecto</small></p>
                  <p class="card-text">Estudiante de tecnologías de la información, área multimedia</p>
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3 pd16" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{url('/static/imagenes/Alejandroo.jpg')}}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Alejandro Delgado Rocha</h5>
                  <p class="card-text"><small class="text-muted">Programador</small></p>
                  <p class="card-text">Estudiante de tecnologías de la información, área sistemas</p>
                </div>
              </div>
            </div>
        </div>
    </div>
    
    <div class="card-group">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{url('/static/imagenes/javier.jpg')}}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Javier Fonseca Arzaga</h5>
                  <p class="card-text"><small class="text-muted">Diseñador</small></p>
                  <p class="card-text">Estudiante de tecnologías de la información, área multimedia</p>  
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3 pd16" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{url('/static/imagenes/Cesar.jpeg')}}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">César Rivas Soriano</h5>
                  <p class="card-text"><small class="text-muted">Diseñador</small></p>
                  <p class="card-text">Estudiante de tecnologías de la información, área multimedia</p>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
    
    <hr>
    
    
    <div class="containerContacto">
      <h1>Contacto</h1>
      <div class="info">
        <p>Si quieres información sobre cualquiera de nuestros productos o estás interesado en el manejo de nuestra mercancía, contesta nuestro formulario y nos pondremos en contacto contigo lo antes posible.</p>
        <br>
        <p>Muchas gracias.</p>
        <br>
        <p>Teléfono: (+52)614-548-08-62</p>
        <br>
        <p>Compras:m.rivascesar@gmail.com <br>
          Calidad:Tallersim89@gmail.com <br>
          Comunicación y marketing:Nayleantinajero@gmail.com</p>
      </div>
  
      <div class="contacto">
          {!! Form::open(['url' => '/email']) !!}
          <label for="name"> Nombre</label>
          <div class="input-group">
              <div class="input-group-prepend">
                  <div class="input-group-text" style="background-color: #E67CAD; color: #fff;" ><i class="fas fa-user"></i></i></div>
              </div>
              {!! Form::text('name', null, ['class' => 'form-control', 'required' ])!!}
          </div>
  
          <label for="name"> Correo</label>
          <div class="input-group">
              <div class="input-group-prepend">
                  <div class="input-group-text" style="background-color: #E67CAD; color: #fff;"><i class="fas fa-envelope"></i></div>
              </div>
              {!! Form::email('email', null, ['class' => 'form-control', 'required'])!!}
          </div>
         
  
          <label for="name"> Asunto</label>
          <div class="input-group">
              <div class="input-group-prepend">
                  <div class="input-group-text" style="background-color: #E67CAD; color: #fff;"><i class="fas fa-heading"></i></div>
              </div>
              {!! Form::text('asunto', null, ['class' => 'form-control', 'required' ])!!}
          </div>
  
          <div class="row mtop16" >
              <div class="col-md-12">
                  <label for="content">Descripción</label>
                  {!! Form::textarea('content',null,['class'=>'form-control']) !!}
              </div>
          </div>
      
          {!! Form::submit('Ingresar',['class' => 'btn btn-success mtop16']) !!}
          {!! Form::close() !!}
      </div>
    </div>
    
</body>
</html>