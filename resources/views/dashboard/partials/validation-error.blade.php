@if($errors->any())
@foreach ($errors as $error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endforeach
@endif