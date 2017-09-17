<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="">
<!-- http://i-cdn.phonearena.com/images/reviews/187602-image/Apple-iPad-Pro-Review-007.jpg -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Masterstars
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com" class="simple-text">
            MS
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="http://www.honcho-sfx.com/blog/wp-content/uploads/2015/08/Han-Solo-movie-300x300.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    Admin
                    <!-- <b class="caret"></b> -->
                </a>
                <!-- <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{route('principal.panel')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#business">
                    <i class="material-icons">business</i>
                    <p>Empresas
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="business">
                    <ul class="nav">
                        @foreach( Empresa::all() as $empresa )
                        <li>
                            <a href="{{route('empresa.show',$empresa->id)}}">{{$empresa->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">group</i>
                    <p>Clients</p>
                </a>
            </li>
        </ul>
    </div>
</div>