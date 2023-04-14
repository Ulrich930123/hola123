@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

<form action="{{ route('user.store') }}" method="post">
    @csrf
    <main>
   

    <<div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control"type="text" name="name" id="name" ">
    </div>

    <<div class="form-group">
        <label for="rol_id">Rol_id</label>
        <input class="form-control"type="text" name="rol_id" id="key" ">
    </div>
{{-- fila 3 --}}

<div class="form-group">
    <label for="email">email</label>
    <input class="form-control" type="text" name="email" id="email" rows="3"/>
</div>
{{-- fila 4 --}}
<div class="form-group">
    <label for="password">password </label>
    <input class="form-control" type="text" name="password" id="password" rows="3"/>
</div>
<button class="btn btn-success btn-sm" type="submit">Publicar</button>

</main>
</form>
@endsection