@extends("layouts.app")

@section("title", "Editar")

@section("content")
<h1 class="my-4 font-serif text-3xl text-center text-purple-600 dark:text-purple-500">este es la pagina create</h1>
<form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{route('productos.update', $producto)}}" method="POST">
    <div class="space-y-4">

        @csrf

        @method('put')

        <label class="flex flex-col">
            <span class="font-serif text-slate-600 dark:text-slate-400">Nombre</span>
            <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="nombre" value="{{old('nombre', $producto->nombre)}}"  type="text">
            @error('nombre')
            <small class="font-bold text-red-500/80">*{{ $message }}</small>
            @enderror
        </label>   

        <label class="flex flex-col">
            <span class="font-serif text-slate-600 dark:text-slate-400">Categoria</span>
            <select class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="categoria">   
                <option value="{{old('categoria', $producto->categoria)}}">{{old('categoria', $producto->categoria)}}</option>
                <option value="lacteo">lacteo </option>
                <option value="harinas">harinas</option>
                <option value="carnico">carnico</option>
                <option value="aseo">aseo</option>
                <option value="bebidas">bebidas</option>
                <option value="granos">granos</option>
                <option value="mascota">mascota</option>
                <option value="condimentos">condimentos</option>
            </select>
            @error('categoria')
            <small class="font-bold text-red-500/80">*{{ $message }}</small>
            @enderror
        </label>

        <label >
            <span class="font-serif text-slate-600 dark:text-slate-400">Marca</span>
            <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="marca" value="{{old('marca', $producto->marca)}}">
            @error('marca')
            <small class="font-bold text-red-500/80">*{{ $message }}</small>
            @enderror
        </label>

        </br>
        <label>
            <span class="font-serif text-slate-600 dark:text-slate-400">Descripcion</span>
        </br>
            <textarea class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="descripcion">{{old('descripcion', $producto->descripcion)}}</textarea>
            @error('descripcion')
            <small class="font-bold text-red-500/80">*{{ $message }}</small>
            @enderror
        </label>
        </br>
        <div class="flex items-center justify-between mt-4">
            <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('productos.index') }}">Regresar</a>

            <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Actualizar</button>
        </div>
    </div>
</form>
@endsection