@extends('dashboard.master')
@section('content')



<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">clave</th>
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">Accuones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rols as $rol)
      <tr>
        <td>{{ $rol->id }}</td>
        <td>{{ $rol->key }}</td>
        <td>{{ $rol->name}}</td>
        <td>{{ $rol->description }}</td>
        <td>
            <a href="{{ route('rol.show',$rol->id) }}" class="btn btn-primary">Ver</a>
            
        </td>
      </tr>
      @endforeach
      </tbody>
  </table>

  {{ $rols->links() }}

  @endsection