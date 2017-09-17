<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons visible-on-sidebar-mini">view_list</i>
            </button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('principal.panel')}}"> Dashboard </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <span class="notification">5</span>
                        <p class="hidden-lg hidden-md">
                            Notifications
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                        <a href="#"><strong>Luis Enrique</strong> responded to your email</a>
                        </li>
                        <li>
                            <a href="#"><strong>Franco Salazar John</strong> responded to your email</a>
                        </li>
                        <li>
                            <a href="#"><strong>David Porlles</strong> responded to your email</a>
                        </li>
                        <li>
                            <a href="#"><strong>María Luna</strong> responded to your email</a>
                        </li>
                        <li>
                            <a href="#"><strong>Celeste</strong> responded to your email</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('session.salir')}}">
                        <i class="material-icons">exit_to_app</i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>