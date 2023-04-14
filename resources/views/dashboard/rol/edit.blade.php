@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{ route('rol.update',$rol->id) }}" method="post">
    @method('PUT')
    @csrf
    <main>
        <div class="form-group">
            <label for="key">Rol</label>
            <input class="form-control"type="text" name="key" id="key" value="{{ old('key',$rol->name) }}">
        </div>
    <div class="form-group">
        <label for="name">Detallado rol</label>
        <input class="form-control"type="text" name="name" id="name" value="{{ old('name',$rol->name) }}">
    </div>



{{-- fila 2 --}}

<div class="form-group">
    <label for="description">Descripcion</label>
    <textarea class="form-control" type="text" name="description" id="description" rows="3"
     value="{{ old('description',$rol->description) }}">{{ $rol->description }}</textarea>
</div>
<button class="btn btn-success btn-sm" type="submit">Editar</button>

</main>
</form>
@endsection