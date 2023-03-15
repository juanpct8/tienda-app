@extends("layouts.plantilla")

@section("title", "Crear")

@section("content")
    <h4>este es la pagina create</h4>
    <form action="{{route('productos.store')}}" method="POST">

        @csrf

        <label>
            Nombre: </br>
            <input type="text" name="nombre" value="{{old('nombre')}}"></br>
        </label>
        @error('nombre')
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria </br>
            <select name="categoria">   
                <option value="{{old('categoria')}}">{{old('categoria')}}</option>
                <option value="lacteo">lacteo </option>
                <option value="harinas">harinas</option>
                <option value="carnico">carnico</option>
                <option value="aseo">aseo</option>
                <option value="bebidas">bebidas</option>
                <option value="granos">granos</option>
                <option value="mascota">mascota</option>
                <option value="condimentos">condimentos</option>
            </select>
            </br>
            <br>
        </label>
        @error('categoria')
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <label >
            <br>
            Marca: </br>
            <input type="text" name="marca" value="{{old('marca')}}"></br>
        </label>
        @error('marca')
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion: </br>
            <textarea name="descripcion" rows="10">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <br>
    </br>
    
    <button type="submit">Enviar formulario</button>
    </form>
@endsection