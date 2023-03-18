@extends("layouts.app")

@section("title" , "productos")

@section("content")
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-serif text-3xl text-purple-600 dark:text-purple-500"> Productos </h1>
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-purple-200 bg-purple-800 hover:bg-purple-700 active:bg-purple-900 focus:outline-none focus:border-purple-900 focus:shadow-outline-sky" href="{{ route('productos.create') }}">Crear un nuevo producto</a>
        <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
    
            @foreach ($productos as $producto )
                <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
                    <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
                        <a href="{{route('productos.show', $producto)}}">{{$producto->nombre}}</a>
                    </h2>
                </div>
            @endforeach
        </main>
    {{$productos->links()}}
@endsection 