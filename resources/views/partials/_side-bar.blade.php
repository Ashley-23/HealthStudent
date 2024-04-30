<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="avatar-initials bg-{{ Arr::random(['success', 'danger', 'info', 'warning', 'ligth']) }}">
                {{ Str::limit($user->nom, 1, '') . Str::limit($user->prenom, 1, '') }}
            </div>

            <div class="info mt-2">
                <a href="#" class="d-block">
                    {{ Str::upper($user->nom) . ' ' . $user->prenom }}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                {{-- Admin --}}
                @if (Auth::guard('admins')->user())
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Etudiants
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.etudiants.index') }}" class="nav-link">
                                    <i class="nav-icon far fa-plus-square"></i>
                                    <p>
                                        Liste des etudiants
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.etudiants.create') }}" class="nav-link">
                                    <i class="nav-icon far fa-plus-square"></i>
                                    <p>
                                        Ajouter un étudiant
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.psy') }}" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Psychologues
                            </p>
                        </a>
                    </li>
                @endif

                {{-- Étudiants --}}
                @if (Auth::guard('etudiants')->user())
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('admin_dashboard') }}" class="nav-link">Tableau de bord</a>
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
                @endif

                {{-- Psycho --}}
                @if (Auth::guard('psychos')->user())
                    <li class="nav-item">
                        <a href="{{ route('psychologue_dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        {{-- <a href="{{route('admin_edt')}}" class="nav-link"> --}}
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Emploi du temps
                            <!-- <span class="badge badge-info right">2</span> -->
                        </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        {{-- <a href="{{route('admin_rdv')}}" class="nav-link"> --}}
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Rendez-vous
                        </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        {{-- <a href="{{route('admin_etudiant')}}" class="nav-link"> --}}
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Etudiants
                        </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        {{-- <a href="{{route('admin_psy')}}" class="nav-link"> --}}
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Psychologues
                        </p>
                        </a>
                    </li>
                @endif


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
