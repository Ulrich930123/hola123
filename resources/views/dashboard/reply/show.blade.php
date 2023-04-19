@extends('dashboard.master')
@section('content')


 {{-- fila 1 --}}
 <div class="form-group">
    <label for="id_post">Post_id</label>
    <input readonly class="form-control"type="text" name="id_post" id="id_post" value="{{ $reply->id_post }}">
</div>

{{-- fila 2--}}
<div class="form-group">
<label for="autor">Autor</label>
<input readonly class="form-control"type="text" name="autor" id="autor" value="{{ $reply->autor }}">
</div>
{{-- fila 3--}}
<div class="form-group">
<label for="reply">Replica</label>
<input readonly class="form-control"type="text" name="reply" id="reply" value="{{ $reply->reply }}">
</div>

@endsection