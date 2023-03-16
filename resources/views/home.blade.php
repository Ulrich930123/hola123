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
@endsection
