@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

<form action="{{ route('post.store') }}" method="post">
    @csrf
    <main>
    <div class="form-group">
        <label for="name">Titulo</label>
        <input class="form-control"type="text" name="name" id="name" ">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input readonly class="form-control"type="text" name="autor" id="autor" value="{{ $autor }}">
    </div>

    

{{-- fila 2 --}}

<div class="form-group">
    <label for="description">Contenido</label>
    <textarea class="form-control" type="text" name="description" id="description" rows="3"
     "></textarea>
</div>
{{-- fila 3 --}}
<div class="form-group">
    <label for="category_id">Categorias</label>
    <select class="form-control" type="text" name="category_id" id="category_id" >
    @foreach ($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>    
    @endforeach
    </select>
</div>


<button class="btn btn-success btn-sm" type="submit">Publicar</button>

</main>
</form>
@endsection