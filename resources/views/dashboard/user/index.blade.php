@extends('dashboard.master')
@section('content')




<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">rol</th>
        <th scope="col">email</th>
        <th scope="col">Accuones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->rol_id }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('user.show',$user->id) }}" class="btn btn-primary">Ver</a>
            <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $user->id }}"
                class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      @endforeach
      </tbody>
  </table>

  {{ $users->links() }}
  <div class="modal fade" id="deleteModal" tableindex="-1" role="dialog" area-labelledby="exampleModalLabel"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Seguro que desea borrar el registro seleccionado?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <form id="formDelete" method="POST" action="{{ route('user.destroy',0) }}" 
          data-action="{{ route('user.destroy',0) }}">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger">Borrar</button>

          </form>
        </div>
      </div>
    </div>

  </div>
  <script>
    window.onload=function(){
      $('#deleteModal').on('show.bs.modal',function(event){
        var button=$(event.relatedTarget)
        var id=button.data('id')
        action=$('#formDelete').attr('data-action').slice(0,-1)
        action+=id
        $('#formDelete').attr('action',action)
        var modal=$(this)
        modal.find('.modal-title').text('Vas a borrar el usuario'+id)
      });
    };
  </script>
  @endsection