@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2 class="h4 text-primary fw-bold mb-1">
                            <i class="bi bi-person-badge me-2"></i>
                            Detalles del Aprendiz
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb small">
                                <li class="breadcrumb-item"><a href="{{ route('apprentices.index') }}">Aprendices</a></li>
                                <li class="breadcrumb-item active" aria-current="page">#{{ $apprentice->id }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('apprentices.edit', $apprentice->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square me-1"></i> Editar
                        </a>
                        <form action="{{ route('apprentices.destroy', $apprentice->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm ms-2" onclick="return confirm('¿Estás seguro de eliminar este aprendiz?')">
                                <i class="bi bi-trash3 me-1"></i> Eliminar
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th class="bg-light text-uppercase small fw-semibold py-3 px-4">ID</th>
                                    <th class="bg-light text-uppercase small fw-semibold py-3 px-4">Nombre</th>
                                    <th class="bg-light text-uppercase small fw-semibold py-3 px-4">Email</th>
                                    <th class="bg-light text-uppercase small fw-semibold py-3 px-4">Teléfono</th>
                                    <th class="bg-light text-uppercase small fw-semibold py-3 px-4">Curso</th>
                                    <th class="bg-light text-uppercase small fw-semibold py-3 px-4">Computador</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="px-4 py-3 fw-semibold">{{ $apprentice->id }}</td>
                                    <td class="px-4 py-3">{{ $apprentice->name }}</td>
                                    <td class="px-4 py-3">
                                        <a href="mailto:{{ $apprentice->email }}" class="text-decoration-none">
                                            {{ $apprentice->email }}
                                        </a>
                                    </td>
                                    <td class="px-4 py-3">
                                        <a href="tel:{{ $apprentice->cellnumber }}" class="text-decoration-none">
                                            {{ $apprentice->cellnumber }}
                                        </a>
                                    </td>
                                    <td class="px-4 py-3">
                                        <span class="badge bg-primary bg-opacity-10 text-primary">
                                            {{ $apprentice->course->courseNumber }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <span class="badge bg-success bg-opacity-10 text-success">
                                            {{ $apprentice->computer->number }}
                                        </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-light border-0 d-flex justify-content-between py-3 px-4">
                            <div>
                                <a href="{{ route('apprentices.index') }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-arrow-left me-1"></i> Volver al listado
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
