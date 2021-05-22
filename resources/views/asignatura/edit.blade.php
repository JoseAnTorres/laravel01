<x-plantilla>
    <x-slot name="contenido">
    <form name="sd" method="POST" action="{{route('asignatura.update', $asignatura)}}" class="p-4 text-light">
    @csrf
    @method("PUT")
    @bind($asignatura)
    <x-form-input name="nombre" label="Nombre asignatura" />
    <x-form-input name="descripcion" label="Descripcion" />
    <x-form-input name="creditos" label="Creditos" />
    <x-form-select name="profesor_id" :options="$profesors" label="Profesor"/>

    <div class="mt-3">
    <button type="submit" class="mt-3 btn btn-info"><i class="fas fa-edit"></i>Actualizar</button>
    <button type="reset" class="mt-3 btn btn-warning"><i class="fas fa-broom"></i>Limpiar</button>
    <a href="{{route('asignatura.index')}}" class='btn btn-primary mt-3'><i class="fas fa-undo"></i>Volver</a>
    </div>
    </form>
    </x-slot>
</x-plantilla>
