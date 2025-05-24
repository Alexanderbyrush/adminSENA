<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <i class="bi bi-shield-lock-fill me-2" style="font-size: 1.8rem;"></i>
            AdminSena
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminsenaNavbar" aria-controls="adminsenaNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminsenaNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Dropdown para Gestión Académica -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs(['teacher.*', 'apprentice.*', 'course.*', 'courseTeacher.*']) ? 'active' : '' }}"
                       href="#" id="academicDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-journal-bookmark-fill me-1"></i> Gestión Académica
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="academicDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('teacher.*') ? 'active' : '' }}"
                               href="{{ route('teacher.index') }}">
                                <i class="bi bi-person-video me-2"></i> Instructores
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('apprentice.*') ? 'active' : '' }}"
                               href="{{ route('apprentices.index') }}">
                                <i class="bi bi-people-fill me-2"></i> Aprendices
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('course.*') ? 'active' : '' }}"
                               href="{{ route('course.index') }}">
                                <i class="bi bi-book-half me-2"></i> Cursos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('courseTeacher.*') ? 'active' : '' }}"
                               href="{{ route('courseTeacher.index') }}">
                                <i class="bi bi-person-plus me-2"></i> Asignación Cursos
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Dropdown para Recursos -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs(['areas.*', 'trainingCenter.*', 'computer.*']) ? 'active' : '' }}"
                       href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-collection-fill me-1"></i> Recursos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('areas.*') ? 'active' : '' }}"
                               href="{{ route('areas.index') }}">
                                <i class="bi bi-grid-fill me-2"></i> Áreas
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('trainingCenter.*') ? 'active' : '' }}"
                               href="{{ route('trainingCenter.index') }}">
                                <i class="bi bi-building me-2"></i> Centros de Formación
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('computer.*') ? 'active' : '' }}"
                               href="{{ route('computer.index') }}">
                                <i class="bi bi-pc-display me-2"></i> Computadores
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

