@extends("layouts.app")

@section("title","producto ".$producto->nombre)

@if (session('status'))
  <div class="status">
    {{session('status')}}
  </div>
@endif




@section("content")
    <h1>Este producto es {{$producto->nombre}}</h1>
    <p><strong>Marca: </strong>{{$producto->marca}}</p>
    <p><strong>Categoria: </strong>{{$producto->categoria}}</p>
    <p>{{$producto->descripcion}}</p>
    <a href="{{route('productos.index')}}">Volver a productos</a>
    <a href="{{route('productos.edit', $producto)}}">Editar producto</a>
    <form action="{{route('productos.destroy', $producto)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button></form>
    </form>

  {{--   <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$producto->nombre}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$producto->marca}}</h6>
          <p class="card-text">{{$producto->descripcion}}</p>
          <a href="{{route('productos.edit', $producto)}}" class="card-link">Editar</a>
          
          <a href="{{route('productos.destroy', $producto)}}" class="btn btn-danger" method="post">Eliminar</a>
          
            @method('delete')
            @csrf
               
        </div>
      </div> --}}

@endsection