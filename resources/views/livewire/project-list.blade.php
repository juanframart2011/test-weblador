<!-- resources/views/livewire/project-list.blade.php -->

<div>
    <h2>Listado de Proyectos</h2>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }} - {{ $project->description }}</li>
        @endforeach
    </ul>
</div>