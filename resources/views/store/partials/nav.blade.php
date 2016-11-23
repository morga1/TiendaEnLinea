<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{ route('home') }}">Logo</a>
    </div>

    <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="true">
      <p class="navbar-text">Tienda Laravel</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a href="#">Conocenos</a></li>
        <li><a href="#">Contactanos</a></li>
        @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>