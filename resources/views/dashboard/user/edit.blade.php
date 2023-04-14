@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{ route('user.update',$user->id) }}" method="post">
    @method('PUT')
    @csrf
    <main>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control"type="text" name="name" id="name" value="{{ old('name',$user->name) }}">
    </div>

{{-- fila 2 --}}

<div class="form-group">
    <label for="rol_id">Rol</label>
    <input class="form-control"type="text" name="rol_id" id="rol_id" value="{{ old('rol_id',$user->rol_id) }}">
</div>
{{-- fila 3 --}}
<div class="form-group">
    <label for="email">email</label>
    <textarea class="form-control" type="text" name="email" id="email" rows="3"
     value="{{ old('email',$user->email) }}">{{ $user->email }}</textarea>
</div>

{{-- fila 4 --}}

<div class="form-group">
    <label for="password">Rol</label>
    <input class="form-control"type="text" name="password" id="password" value="{{ old('password',$user->password) }}">
</div>

<button class="btn btn-success btn-sm" type="submit">Editar</button>

</main>
</form>
@endsection