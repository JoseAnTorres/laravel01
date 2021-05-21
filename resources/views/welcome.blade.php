<x-plantilla>
    <x-slot name="contenido">
        <div class="grid grid-cols-2">
            <div class="col-md-12 text-center">
                <a href="{{route('profesor.index')}}" class='btn btn-primary my-3'>Profesores</a>
                <a href="{{route('asignatura.index')}}" class='btn btn-primary my-3'>Asignaturas</a>
            </div>
        </div>
    </x-slot>
</x-plantilla>
