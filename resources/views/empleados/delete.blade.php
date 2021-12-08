<div class="modal fade" id="modal-delete-{{$empleado->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <form action="{{route('empleado.destroy',$empleado->id)}}" method="post">
            @csrf
            @method('DELETE')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseas eliminar empleado? {{$empleado->nombres."".$empleado->apellidos}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-danger" value="Eliminar">
        </div>
      </div>
    </form>
    </div>
  </div>