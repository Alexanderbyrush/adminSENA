@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3 border-bottom">
                        <h5 class="mb-0 text-primary">Registrar Nuevo Aprendiz</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('apprentices.store')}}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label fw-medium">Nombre del Aprendiz</label>
                                <input type="text" class="form-control rounded-pill" id="name" name="name"
                                       placeholder="Ej: Juan Pérez" required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-medium">Correo Electrónico</label>
                                <input type="email" class="form-control rounded-pill" name="email" id="email"
                                       placeholder="Ej: ejemplo@dominio.com" required>
                            </div>

                            <div class="mb-4">
                                <label for="cellnumber" class="form-label fw-medium">Teléfono</label>
                                <input type="tel" class="form-control rounded-pill" name="cellnumber" id="cellnumber"
                                       placeholder="Ej: 3001234567" required>
                            </div>

                            <div class="mb-4">
                                <label for="course_id" class="form-label fw-medium">Curso</label>
                                <select name="course_id" id="course_id" class="form-select rounded-pill" required>
                                    <option value="" disabled selected>Seleccione un curso</option>
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">Curso #{{$course->courseNumber}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="computer_id" class="form-label fw-medium">Computador</label>
                                <select name="computer_id" id="computer_id" class="form-select rounded-pill" required>
                                    <option value="" disabled selected>Seleccione un computador</option>
                                    @foreach($computers as $computer)
                                        <option value="{{$computer->id}}">PC #{{$computer->number}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-grid gap-3 d-md-flex justify-content-md-end mt-4">
                                <a href="{{route('apprentices.index')}}" class="btn btn-outline-secondary px-4 rounded-pill">
                                    <i class="bi bi-x-circle me-2"></i>Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary px-4 rounded-pill">
                                    <i class="bi bi-save me-2"></i>Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
