@extends('admin.master')
@section('title', 'Agregar producto')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('admin/products')}}"><i class="fas fa-boxes"></i> Products</a>
</li>
<li class="breadcrumb-item">
    <a href="{{url('admin/products/add')}}"><i class="fas fa-edit"></i> Editar producto</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow" id="panel">
        <div class="header">
            <h2 class="title"><i class="fas fa-edit"></i> Editar producto</h2>
        </div>

        <div class="inside">
            {!! Form::open(['url' => '/admin/products/'.$producto->id.'/edit', 'files'=>true]) !!}
            <div class="row">
                <div class="col-md-6">
                    <label for="title">Nombre del producto</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                        </div>
                        {!! Form::Text('name',$producto->name,['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="title">Categoría</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"></i></i></span>
                        </div>
                        {!! Form::select('category',$cats,$producto->category_id,['class' => 'custom-select']) !!}
                    </div>
                </div>
                
                <div class="col-md-3">
                    <label for="title">Imagen destacada</label>
                    <div class="custom-file">
                        {!! Form::File('img',['class' => 'custom-file-input', 'id'=>'inputGroupFile01']) !!}
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-3">
                    <label for="price"> Precio</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        {!! Form::number('price',$producto->amount, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="Descuento"> Descuento</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        {!! Form::select('indiscount',['0' => 'no','1' => 'si'],$producto->in_discount, ['class' => 'custom-select']) !!}
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="price"> Porcentaje de descuento</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        {!! Form::number('discount',$producto->discount, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                    </div>
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    <label for="content">Descripcion</label>
                    {!! Form::textarea('content',$producto->content,['class'=>'form-control']) !!}
                </div>
            </div>

            {!! Form::submit('Ingresar',['class' => 'btn btn-success mtop16']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection