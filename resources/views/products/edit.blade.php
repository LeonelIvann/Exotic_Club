

@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn-homeProducts" href="{{ route('products.index') }}">Volver</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hay algun problema con los datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST" class="formularioDeCreacion">
        @csrf
        @method('PUT')
   
         <div class="row formularioAddMiembro">
            <div class="col-xs-12 col-sm-12 col-md-12 container-elements-form boxBlade-1">
                <div class="form-group content-form-1">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 container-elements-form boxBlade-2">
                <div class="form-group content-form-2">
                    <strong>Información:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn-homeProducts btnAddMember">Guardar</button>
            </div>
        </div>
   
    </form>
@endsection