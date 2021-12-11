@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nuevo Miembro</h2>
        </div>
        <div class="pull-right">
            <a class="btn-homeProducts" href="{{ route('products.index') }}"> VOLVER</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Hay algunos problemas, asegurate de rellenar todo.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST" class="formularioDeCreacion">
    @csrf
  
     <div class="row formularioAddMiembro">
        <div class="col-xs-12 col-sm-12 col-md-12 container-elements-form boxBlade-1">
            <div class="form-group content-form-1">
                <strong class="add-Name">Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 container-elements-form boxBlade-2">
            <div class="form-group content-form-2">
                <strong>Vehiculo y detalles extra:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Modelo y detalles extras"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn-homeProducts btnAddMember">AGREGAR</button>
        </div>
    </div>
   
</form>
@endsection