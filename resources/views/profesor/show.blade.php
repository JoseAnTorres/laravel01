<x-plantilla>
    <x-slot name="contenido">
    <div class="card m-auto" style="width: 24rem;">
  <div class="card-body">
    <h5 class="card-title">{{($profesor->nombre.", ".$profesor->apellidos)}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$profesor->email}}</h6>
    <p class="card-text">Localidad: {{$profesor->localidad}}</p>
    <h6 class="card-subtitle mb-2 text-muted">
        Asignatura:
        {{$profesor->asignatura->nombre}}</a>
        </h6>
    <div class="mt-2">
        <a href="{{route('profesor.index')}}" class='btn btn-primary mt-3'><i class="fas fa-undo"></i>Volver</a>
    </div>
  </div>
</div>
    </x-slot>
</x-plantilla>
