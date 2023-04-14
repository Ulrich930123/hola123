@extends('dashboard.master')
@section('content')


<div class="form-group">
    <label for="key">Rol</label>
    <input readonly class="form-control"type="text" name="key" id="key" value="{{ $rol->key }}">
</div>

    <div class="form-group">
        <label for="name">Detallado rol</label>
        <input readonly class="form-control"type="text" name="name" id="name" value="{{ $rol->name }}">
    </div>



{{-- fila 3 --}}

<div class="form-group">
    <label for="description">Descripcion</label>
    <textarea readonly class="form-control" type="text" name="description" id="description" rows="3"
     value="{{ $rol->description }}">{{ $rol->description }}</textarea>
</div>


@endsection