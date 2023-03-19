<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>

    <a class="nav-link" href="{{ route('oferta.index') }}">
        <i class=" fas fa-building"></i><span>Ofertas</span>
    </a>

    <a class="nav-link" href="#">
        <i class=" fas fa-building"></i><span>Mis postulaciones</span>
    </a>
    @can('vacante.index')
        <a class="nav-link" href="{{ route('vacante.index') }}">
            <i class=" fas fa-building"></i><span>Perfiles</span>
        </a>
    @endcan
    <a class="nav-link" href="#">
        <i class=" fas fa-building"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="#">
        <i class=" fas fa-building"></i><span>Entevista</span>
    </a>
    <a class="nav-link" href="{{ route('reclutador.index') }}">
        <i class=" fas fa-building"></i><span>Agregar reclutadores</span>
    </a>
    <a class="nav-link" href="#">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
