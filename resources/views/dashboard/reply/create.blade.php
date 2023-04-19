@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

<form action="{{ route('reply.store') }}" method="post">
    @csrf
    <main>

   
        <div class="form-group">
            <label for="id_post">Titulo post a replicar</label>
            <select class="form-control" type="text" name="id_post" id="id_post" >
            @foreach ($posts as $post)
            <option value="{{ $post->id }}">{{ $post->name }}</option>    
            @endforeach
            </select>
        </div>
{{-- fila 3--}}
<div class="form-group">
    <label for="autor">Autor</label>
    <input readonly class="form-control"type="text" name="autor" id="autor" value="{{ $autor }}">
</div>
{{-- fila 4--}}
<div class="form-group">
    <label for="reply">Replica</label>
    <input class="form-control"type="text" name="reply" id="reply" ">
</div>

<button class="btn btn-success btn-sm" type="submit">Publicar</button>

</main>
</form>
@endsection