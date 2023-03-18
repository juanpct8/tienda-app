@extends("layouts.app")

@section("title", "Editar")

@section("content")
    <h4>este es la pagina edit</h4>
    <form action="{{route('productos.update', $producto)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre: </br>
            <input type="text" name="nombre" value="{{old('nombre', $producto->nombre)}}"></br>
        </label>
        @error('nombre')
            <small>*{{$message}}</small>
            <br>
        @enderror
        <label>
             Categoria </br>
            <select name="categoria">   
                <option value="{{old('categoria', $producto->categoria)}}">{{old('categoria', $producto->categoria)}}</option>
                <option value="lacteo">lacteo </option>
                <option value="harinas">harinas</option>
                <option value="carnico">carnico</option>
                <option value="aseo">aseo</option>
                <option value="bebidas">bebidas</option>
                <option value="granos">granos</option>
                <option value="mascota">mascota</option>
                <option value="condimentos">condimentos</option>
            </select></br>
        </label>
        <label >
            Marca: </br>
            <input type="text" name="marca" value="{{old('marca', $producto->marca)}}"></br>
        </label>
        @error('marca')
            <small>*{{$message}}</small>
            <br>
        @enderror
        <label>
            Descripcion: </br>
            <textarea name="descripcion" rows="10" ">{{old('descripcion', $producto->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <small>*{{$message}}</small>
            <br>
        @enderror
    </br>
    <button type="submit" class="btn btn-success">Actualizar formulario</button>
    </form>
@endsection