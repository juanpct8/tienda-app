@extends("layouts.plantilla")

@section("title" , "productos")

@section("content")
    <h3> es la pagina principal de productos </h3>
    
    <a href="{{route('productos.create')}}">Nuevo producto</a>
    <ul>
        @foreach ($productos as $producto )

            <li>
                <a href="{{route('productos.show', $producto->id)}}">{{$producto->nombre}}</a>
            </li>
            
        @endforeach
    </ul> 
    {{$productos->links()}}
@endsection 

{{-- {{$productos->links()}}
    <div class="container px-3">
        <div class="row row-cols-3">
            @foreach ($productos as $producto)
                <div class="col p-3 border bg-white">
                    <div class="card col border bg-light" style="width: 18rem;">
                        <div class="card-body">
                            <a href="{{route('productos.show', $producto)}}" class="card-title"><h5>{{$producto->nombre}}</h5></a>
                            <h6 class="card-subtitle mb-2 text-muted">{{$producto->marca}}</h6>
                            <p class="card-text">{{Str::limit($producto->descripcion, 80)}}</p>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div> --}}
    



