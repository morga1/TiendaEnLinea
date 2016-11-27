@if(Auth::check())
	<li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      		<i class="fa fa-user"></i> {{Auth::user()->email}}<span class="caret"></span>
      </a>
       <ul class="dropdown-menu" role="menu">
           <li><a href="{{ url('/logout') }}">Finalizar Sesion</a></li>            
       </ul>
	</li>
@else
	<li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
       <ul class="dropdown-menu" role="menu">
           <li><a href="{{ url('/login') }}">Iniciar Sesion</a></li>            
           <li><a href="{{ url('/register') }}">Registro</a></li>            
       </ul>
	</li>
@endif