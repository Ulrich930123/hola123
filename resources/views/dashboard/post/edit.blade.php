@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{ route('post.update',$post->id) }}" method="post">
    @method('PUT')
    @csrf
    <main>
    <div class="form-group">
        <label for="name">Titulo</label>
        <input class="form-control"type="text" name="name" id="name" value="{{ old('name',$post->name) }}">
    </div>



{{-- fila 2 --}}

<div class="form-group">
    <label for="description">Contenido</label>
    <textarea class="form-control" type="text" name="description" id="description" rows="3"
     value="{{ old('description',$post->description) }}">{{ $post->description }}</textarea>
</div>
<button class="btn btn-success btn-sm" type="submit">Editar</button>

</main>
</form>
<form action="{{ route("posT.image",$post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col">
            <input type="submit" class="btn btn-primary" value="Subir">
        </div>
    </div>
    
</form>
@endsection