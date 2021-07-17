<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ '/' == request()->path() ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i><p>Accueil</p>
            </a>
        </li>

        <li class="nav-item menu-open">
        <a href="#" class="nav-link {{ 'user' == request()->path() ||
            'add-user' == request()->path() ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Utilisateurs
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ route('user') }}" class="nav-link {{ 'user' == request()->path()||
             'add-user' == request()->path()  ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Admins</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Chefs de Tribunaux</p>
            </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Régions
            </p>
        </a>
        </li>
    </ul>
    </nav>