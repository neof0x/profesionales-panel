<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$profesional->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{route('profesional.destroy',$profesional->id)}}" method="POST">
        @csrf
        @method('DELETE')
        
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Profesional</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Realmente deseas borrar al profesional {{$profesional->name." ".$profesional->apellido}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
    </form>
  </div>
</div>