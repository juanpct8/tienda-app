@extends("layouts.app")

@section("title","producto ".$producto->nombre)



@section("content")
    <h1 class="my-4 font-serif text-3xl text-center text-purple-600 dark:text-purple-500">Este producto es {{$producto->nombre}}</h1>
    <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow h-96 dark:bg-slate-800">
      <p class="flex-1 leading-normal text-slate-600 dark:text-slate-400"><strong>Marca: </strong>{{$producto->marca}}</p>
      <p class="flex-1 leading-normal text-slate-600 dark:text-slate-400"><strong>Categoria: </strong>{{$producto->categoria}}</p>
      <p class="flex-1 leading-normal text-slate-600 dark:text-slate-400">{{$producto->descripcion}}</p>
      <div class="flex justify-between">
        <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('productos.index')}}">Volver a productos</a>
        <a  class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('productos.edit', $producto)}}">Editar producto</a>
        <form action="{{route('productos.destroy', $producto)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none">Eliminar</button>
        </form>
      </div>  
    </div>
    
@endsection