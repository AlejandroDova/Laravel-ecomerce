@extends('welcome')
@section('title', 'Producto')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<script src="https://js.stripe.com/v3/"></script>

{!! Form::open(['url' => '/admin/products/add', 'id'=>'payment-form']) !!}
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                        </div>
                        {!! Form::Text('name',null,['class' => 'form-control']) !!}
                    </div>
                </div>
            
                <div class="col-md-6">
                  <label for="title">Dirección 1</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                      </div>
                      {!! Form::Text('direccion1',null,['class' => 'form-control']) !!}
                  </div>
              </div>
          </div>

          <div class="row">
            <div class="col-md-6">
                <label for="title">Apellidos</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                    </div>
                    {!! Form::Text('apellidos',null,['class' => 'form-control']) !!}
                </div>
            </div>
        
            <div class="col-md-6">
              <label for="title">Dirección 2</label>
              <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                  </div>
                  {!! Form::Text('direccion2',null,['class' => 'form-control']) !!}
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6">
            <label for="title">Correo electrónico</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                </div>
                {!! Form::Text('email',null,['class' => 'form-control']) !!}
            </div>
        </div>
    
        <div class="col-md-6">
          <label for="title">Ciudad</label>
          <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
              </div>
              {!! Form::Text('ciudad',null,['class' => 'form-control']) !!}
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-6">
        <label for="title">Teléfono</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
            </div>
            {!! Form::Text('telefono',null,['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-6">
      <label for="title">Código postal</label>
      <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
          </div>
          {!! Form::Text('direccion2',null,['class' => 'form-control']) !!}
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
      <label for="title">Móvil</label>
      <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
          </div>
          {!! Form::Text('movil',null,['class' => 'form-control']) !!}
      </div>
  </div>

  <div class="col-md-6">
    <label for="title">Estado</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
        </div>
        {!! Form::Text('estado',null,['class' => 'form-control']) !!}
    </div>
</div>
</div>

<div class="row">
  <div class="col-md-6">
      <label for="title">RFC</label>
      <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
          </div>
          {!! Form::Text('apellidos',null,['class' => 'form-control']) !!}
      </div>
  </div>

  <div class="col-md-6">
    <label for="title">País</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
        </div>
        {!! Form::Text('direccion2',null,['class' => 'form-control']) !!}
    </div>
</div>
</div>

    
    <div class="col-md-6">
        <label for="title">Nombre en tarjeta</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
            </div>
            {!! Form::Text('namecard',null,['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="title">Correo electrónico</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                </div>
                {!! Form::email('email',null,['class' => 'form-control']) !!}
            </div>
        </div>
        
        <label for="card-element">
            Credit or debit card
            </label>
            <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
            </div>
         
            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>

  </div>
            {!! Form::submit('Ingresar',['class' => 'btn btn-success mtop16']) !!}
            {{ csrf_field() }}
            {!! Form::close() !!}
    <script>
    var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
    </script>
    <script src="{{ asset('/js/card.js') }}"></script>
@endsection