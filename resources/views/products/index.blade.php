
@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> AGREGAR MIEMBRO</a>
                <a class="btn-homeProducts" href="/home">VOLVER</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr class="title-th">
            <th class="thOrden">Nº</th>
            <th class="thMiembro">Miembro</th>
            <th class="thDetail">DETALLES</th>
            <th class="thOptions">OPCIONES</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td class="idMiembro">{{ ++$i }}</td>
            <td class="proName">{{ $product->name }}</td>
            <td class="proDetail">{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection