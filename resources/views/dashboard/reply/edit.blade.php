@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
<form action="{{ route('reply.update',$reply->id) }}" method="post">
    @method('PUT')
    @csrf
    <main>
    {{-- fila 1 --}}
    <div class="form-group">
        <label for="id_post">Post_id</label>
        <input readonly class="form-control"type="text" name="id_post" id="id_post" value="{{old('id_post',$reply->id_post)  }}">
    </div>

{{-- fila 2--}}
<div class="form-group">
    <label for="autor">Autor</label>
    <input readonly class="form-control"type="text" name="autor" id="autor" value="{{old('autor',$reply->autor ) }}">
</div>
{{-- fila 4--}}
<div class="form-group">
    <label for="reply">Replica</label>
    <input class="form-control"type="text" name="reply" id="reply" value="{{ old('reply',$reply->reply) }}">
</div>
<button class="btn btn-success btn-sm" type="submit">Editar</button>

</main>
</form>
@endsection