<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('panel.index')}}">
        <img src="{{asset('static/img/ess-logo-white.png')}}" style="max-height: 35px;margin-top: -5px;">
        </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->username}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <!-- <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li> -->
                <li>
                    <a href="{{route('session.salir')}}"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                </li>
            </ul>
        </li>
    </ul>
    </div>
</nav>