@extends('dashboard.master')
@section('content')



<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">id_post</th>
        <th scope="col">autor</th>
        <th scope="col">Replica</th>
        <th scope="col">Creacion</th>
        <th scope="col">Actualizacion</th>
        <th scope="col">Accuones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($replies as $reply)
      <tr>
        <td>{{ $reply->id }}</td>
        <td>{{ $reply->id_post }}</td>
        <td>{{ $reply->autor }}</td>
        <td>{{ $reply->reply }}</td>
        <td>{{ $reply->created_at->format('d-m-Y') }}</td>
        <td>{{ $reply->updated_at->format('d-m-Y') }}</td>
        <td>
            <a href="{{ route('reply.show',$reply->id) }}" class="btn btn-primary">Ver</a>
            <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $reply->id }}"
                class="btn btn-danger">Eliminar</button>
        </td>
      </tr>
      @endforeach
      </tbody>
  </table>

  {{ $replies->links() }}
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
          <form id="formDelete" method="POST" action="{{ route('reply.destroy',0) }}" 
          data-action="{{ route('reply.destroy',0) }}">
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
        modal.find('.modal-title').text('Vas a borrar el post'+id)
      });
    };
  </script>
  @endsection