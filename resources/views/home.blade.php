@extends('layouts.app')

@section('content')
<div class="contentr">
    <div class="title m-b-md">
    Larablog
</div>
        @auth
            Bienvenido al sistema{{ auth()->user()->name }}
        @endauth
    
</div>
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}

    </div>
        
    @endif
    {{ auth()->user()->rol_id }}
</div>
@endsection
