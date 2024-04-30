<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">Tableau de bord</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <form action="{{ route('logout') }}" method="post" hidden id="logout-form">
            @csrf
        </form>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link"
                onclick="document.getElementById('logout-form').submit()">Deconnexion</a>
        </li>

    </ul>

    </ul>
</nav>