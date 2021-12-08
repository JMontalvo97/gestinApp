<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$proveedor->id}}" data-backdrop="static" data-keyboard="false"
  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('proveedores.destroy',$proveedor->id)}}" method="post">
            @csrf
            @method('DELETE')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Eliminar Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Deseas eliminar proveedor? {{$proveedor->nombre.""}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-danger" value="Eliminar">
        </div>
      </div>
    </form>
    </div>
  </div>