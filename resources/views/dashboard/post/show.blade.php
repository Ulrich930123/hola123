@extends('dashboard.master')
@section('content')




    <div class="form-group">
        <label for="name">Titulo</label>
        <input readonly class="form-control"type="text" name="title" id="name" value="{{ $post->name }}">
    </div>


{{-- fila 2 --}}
<div class="form-group">
    <label for="state">Estado de la publicacion</label>
    <input readonly class="form-control"type="text" name="state" id="state" value="{{ $post->state }}">
</div>

{{-- fila 3 --}}

<div class="form-group">
    <label for="description">Contenido</label>
    <textarea readonly class="form-control" type="text" name="description" id="description" rows="3"
     value="{{ $post->description }}">{{ $post->description }}</textarea>
</div>


@endsection