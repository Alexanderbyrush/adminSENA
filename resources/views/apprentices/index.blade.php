@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Listado de Computers</h4>
        <a href="{{ route('apprentices.create') }}" class="btn btn-primary">Agregar Computer</a>
    </div>
    <div class="table-responsive rounded-3 shadow-sm">
        <table class="table table-hover align-middle text-center">
            <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Número Celular</th>
                <th>Curso ID</th>
                <th>Computer ID</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($apprentices as $apprentice)
                <tr>
                    <td class="fw-semibold">{{ $apprentice['id'] }}</td>
                    <td>{{ $apprentice['name'] }}</td>
                    <td>{{ $apprentice['email'] }}</td>
                    <td>{{ $apprentice['cellnumber'] }}</td>
                    <td>{{ $apprentice['course_id'] }}</td>
                    <td>{{ $apprentice['computer_id'] }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{route('apprentices.show', $apprentice->id)}}" class="btn btn-info btn-sm rounded-circle" title="Ver">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <a href="{{route('apprentices.edit', $apprentice->id)}}" class="btn btn-warning btn-sm rounded-circle" title="Editar">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{route('apprentices.destroy', $apprentice->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm rounded-circle" title="Eliminar">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
