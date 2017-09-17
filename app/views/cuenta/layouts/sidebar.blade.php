<div class="sidebar" data-color="blue">
			<div class="logo" style="padding-bottom: 5px;padding-top: 5px;">
				<a href="{{route('principal.inicio')}}" class="simple-text">
					<img src="https://assistsalud.com/static/img/logo.png" style="max-height: 51px;">
				</a>
			</div>
	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <?php ( Session::get('item-sidebar') == 'panel' ) ? $active = 'active' : $active = '' ; ?>
	                <li class="{{$active}}">
	                    <a href="{{route('cuenta.panel')}}">
	                        <i class="material-icons">dashboard</i>
	                        <p>Panel</p>
	                    </a>
	                </li>
	                <?php ( Session::get('item-sidebar') == 'datos' ) ? $active = 'active' : $active = '' ; ?>
	                <li class="{{$active}}">
	                    <a href="{{route('cuenta.datos')}}">
	                        <i class="material-icons">person</i>
	                        <p>Mi cuenta</p>
	                    </a>
	                </li>
	                <?php ( Session::get('item-sidebar') == 'beneficiarios' ) ? $active = 'active' : $active = '' ; ?>
	                <li class="{{$active}}">
	                    <a href="{{route('cuenta.beneficiarios')}}">
	                        <i class="material-icons">supervisor_account</i>
	                        <p>Mis beneficiarios</p>
	                    </a>
	                </li>
	                <?php ( Session::get('item-sidebar') == 'tracking' ) ? $active = 'active' : $active = '' ; ?>
	                <li class="{{$active}}">
	                    <a href="{{route('cuenta.tracking')}}">
	                        <i class="material-icons">library_books</i>
	                        <p>Tracking</p>
	                    </a>
	                </li>
	                <?php ( Session::get('item-sidebar') == 'pagos' ) ? $active = 'active' : $active = '' ; ?>
	                <li class="{{$active}}">
	                    <a href="{{route('cuenta.pagos')}}">
	                        <i class="material-icons">credit_card</i>
	                        <p>Historial de pagos</p>
	                    </a>
	                </li>
	                <?php ( Session::get('item-sidebar') == 'ayuda' ) ? $active = 'active' : $active = '' ; ?>
	                <li class="{{$active}}">
	                    <a href="{{route('cuenta.ayuda')}}">
	                        <i class="material-icons">help</i>
	                        <p>Atención al cliente</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>