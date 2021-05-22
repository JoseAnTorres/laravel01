<x-plantilla>
    <x-slot name="contenido">
    <div class="card m-auto" style="width: 24rem;">
  <div class="card-body">
    <h5 class="card-title">{{($asignatura->nombre)}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$asignatura->descripcion}}</h6>
    <p class="card-text">Creditos: {{$asignatura->creditos}}</p>
    <h6 class="card-subtitle mb-2 text-muted">
        Profesor:
        {{$asignatura->profesor->nombre}}
        {{$asignatura->profesor->apellidos}}
        </h6>
    <div class="mt-2">
        <a href="{{route('asignatura.index')}}" class='btn btn-primary mt-3'><i class="fas fa-undo"></i>Volver</a>
    </div>
  </div>
</div>
    </x-slot>
</x-plantilla>
