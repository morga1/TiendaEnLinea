
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i>  <span class="caret"></span> <!--Auth::user()->user-->
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ Auth::logout() }}">Finalizar sesión</a></li>
		</ul>
	</li>
