<x-plantilla>
    <x-slot name="contenido">
    <form name="sd" method="POST" action="{{route('profesor.store')}}" class="p-4 text-light">
    @csrf
    <x-form-input name="nombre" label="Nombre profesor" />
    <x-form-input name="apellidos" label="Apellidos" />
    <x-form-input name="email" label="Email" />
    <x-form-input name="localidad" label="Localidad" />

    <div class="mt-3">
    <button type="submit" class="mt-3 btn btn-info"><i class="fas fa-save"></i>Enviar</button>
    <button type="reset" class="mt-3 btn btn-warning"><i class="fas fa-broom"></i>Limpiar</button>
    <a href="{{route('profesor.index')}}" class='btn btn-primary mt-3'><i class="fas fa-undo"></i>Volver</a>
    </div>
    </form>
    </x-slot>
</x-plantilla>
