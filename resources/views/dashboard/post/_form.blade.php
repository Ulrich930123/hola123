@extends('dashboard.master')
@section('content')



@csrf
    <<div class="form-group">
        <label for="name">Titulo</label>
        <input class="form-control"type="text" name="title" id="name" value="{{old('name', $post->name) }}">
    </div>



{{-- fila 2 --}}

<div class="form-group">
    <label for="description">Contenido</label>
    <textarea class="form-control" type="text" name="description" id="description" rows="3"
     value="{{ $post->description }}">{{ old('description',$post->description) }}</textarea>
</div>
<input type="submit" value="Enviar" class="btn btn-primary">

@endsection