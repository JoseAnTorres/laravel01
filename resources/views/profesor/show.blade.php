<x-plantilla>
    <x-slot name="contenido">
    <div class="card m-auto" style="width: 24rem;">
  <div class="card-body">
    <h5 class="card-title">{{($profesor->nombre.", ".$profesor->apellidos)}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$profesor->email}}</h6>
    <p class="card-text">Localidad: {{$profesor->localidad}}</p>
    <p class="card-text">
        <b>Asignaturas</b>
        <ul>
          @foreach($profesor->asignaturas as $item)
            <li>{{$item->nombre}}</a></li>
          @endforeach
        </ul>
      </p>
    <div class="mt-2">
        <a href="{{route('profesor.index')}}" class='btn btn-primary mt-3'><i class="fas fa-undo"></i>Volver</a>
    </div>
  </div>
</div>
    </x-slot>
</x-plantilla>
