@extends('dashboard.master')
@section('content')

{{-- fila 1 --}}
    <div class="form-group">
        <label for="name">Detallado rol</label>
        <input readonly class="form-control"type="text" name="name" id="name" value="{{ $user->name }}">
    </div>

{{-- fila 2 --}}
<div class="form-group">
    <label for="rol_id">Rol</label>
    <input readonly class="form-control"type="text" name="rol_id" id="rol_id" value="{{ $user->rol_id }}">
</div>

{{-- fila 3 --}}
<div class="form-group">
    <label for="email">email</label>
    <textarea readonly class="form-control" type="text" name="email" id="email" rows="3"
     value="{{ $user->email }}">{{ $user->email }}</textarea>
</div>


@endsection