@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

<form action="{{ route('category.store') }}" method="post">
    @csrf
    <main>
    <<div class="form-group">
        <label for="name">Titulo</label>
        <input class="form-control"type="text" name="name" id="name" ">
    </div>



{{-- fila 2 --}}

<div class="form-group">
    <label for="description">Contenido</label>
    <textarea class="form-control" type="text" name="description" id="description" rows="3"
     "></textarea>
</div>
<button class="btn btn-success btn-sm" type="submit">Publicar</button>

</main>
</form>
@endsection