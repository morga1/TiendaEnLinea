<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="#">Logo</a>
    </div>

    <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="true">
      <p class="navbar-text"><i class="fa fa-dashboard"></i> Tienda Laravel - Dashboard</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Usuarios</a></li>
     @include('admin.partials.menu-user')

      </ul>
    </div>
  </div>
</nav>