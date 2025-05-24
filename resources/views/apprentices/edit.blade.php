@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h4 text-primary fw-bold">
                        <i class="bi bi-pencil-square me-2"></i>
                        Editar Aprendiz #{{ $apprentice->id }}
                    </h2>
                    <a href="{{ route('apprentices.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-1"></i> Volver
                    </a>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form action="{{ route('apprentices.update', $apprentice->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="form-label fw-medium">Nombre Completo</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ old('name', $apprentice->name) }}"
                                       placeholder="Ingrese el nombre completo">
                                @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-medium">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       value="{{ old('email', $apprentice->email) }}"
                                       placeholder="ejemplo@correo.com">
                                @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="cell_number" class="form-label fw-medium">Teléfono</label>
                                <input type="text" class="form-control" id="cell_number" name="cell_number"
                                       value="{{ old('cellnumber', $apprentice->cellnumber) }}"
                                       placeholder="Número de contacto">
                                @error('cell_number')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center border-top pt-4 mt-3">
                                <button type="reset" class="btn btn-light">
                                    <i class="bi bi-arrow-counterclockwise me-1"></i> Restablecer
                                </button>
                                <div>
                                    <a href="{{ route('apprentices.index') }}" class="btn btn-outline-danger me-2">
                                        <i class="bi bi-x-circle me-1"></i> Cancelar
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-circle me-1"></i> Guardar Cambios
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
