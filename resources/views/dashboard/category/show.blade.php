@extends('dashboard.master')
@section('content')




    <div class="form-group">
        <label for="name">Titulo</label>
        <input readonly class="form-control"type="text" name="title" id="name" value="{{ $category->name }}">
    </div>



{{-- fila 3 --}}

<div class="form-group">
    <label for="description">Contenido</label>
    <textarea readonly class="form-control" type="text" name="description" id="description" rows="3"
     value="{{ $category->description }}">{{ $category->description }}</textarea>
</div>


@endsection