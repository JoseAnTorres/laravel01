<x-plantilla>
    <x-slot name="contenido">
        <a href="{{route('profesor.create')}}" class="mt-3 btn btn-light"><i class="fas fa-plus-square"></i> Crear Profesor</a>
        <table class="table table-light mt-3">
  <thead>
    <tr>
      <th scope="col">Detalle</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Email</th>
      <th scope="col">Localidad</th>
      <th colspan="2">Acciones</>
    </tr>
  </thead>
  <tbody>
    @foreach($profesor as $item)
    <tr>
      <th scope="row">
        <a href="{{route('profesor.show', $item)}}" class="btn btn-info"><i class="fas fa-info-circle"> Detalle</i>
      </th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->apellidos}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->localidad}}</td>
      <td class="center">
        <a href="{{route('profesor.edit', $item)}}" class="btn btn-warning"><i class="fas fa-edit"> Actualizar</i></a>
      </td>
      <td class="center">
        <form name="as" method="POST" action="{{route('profesor.destroy', $item)}}">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"> Borrar</i></button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mt-2">
    {{$profesor->links()}}
</div>
<button class="mt-3 btn btn-primary" onclick="window.history.back();"><i class="fas fa-undo"></i>Volver</button>
</x-slot>
</x-plantilla>
