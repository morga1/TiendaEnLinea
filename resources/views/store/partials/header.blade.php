<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{route('store')}}"><img src="{{asset('images/logo.png')}}" width="40"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">Dale Play a tu vida</p>      
        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('carrito-show')}}"><i class="fa fa-shopping-cart"></i></a></li>        
       
        @include('store.partials.categories-menu')

        @include('store.partials.user')       

        <li><a href="{{route('admin-show')}}"><i class="fa fa-cog"></i></a></li> 
        </ul>        
      
    </div>
  </div>
</nav>