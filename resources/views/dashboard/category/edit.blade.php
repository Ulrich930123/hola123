@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{ route('category.update',$category->id) }}" method="post">
    @method('PUT')
    @csrf
    <main>
    <div class="form-group">
        <label for="name">Titulo</label>
        <input class="form-control"type="text" name="name" id="name" value="{{ old('name',$category->name) }}">
    </div>



{{-- fila 2 --}}

<div class="form-group">
    <label for="description">Contenido</label>
    <textarea class="form-control" type="text" name="description" id="description" rows="3"
     value="{{ old('description',$category->description) }}">{{ $category->description }}</textarea>
</div>
<button class="btn btn-success btn-sm" type="submit">Editar</button>

</main>
</form>
@endsection