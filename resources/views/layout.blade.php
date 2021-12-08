<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page Title - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stilo.css">
</head>
<body>
   <header>
    <div class="jumbotron jumbotronEncabezado">
        <img src="img/stonks.png" class="mx-auto">
        <div class="container">
          <h1 class="display-4 text-light">GestinApp</h1>
          <p class="lead text-light">Administra tus activos</p>
        </div>
      </div>
   </header>
   
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <img src="img/bd.png">
    <a class="navbar-brand" href="{{route('Inicio')}}">INICIO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('productos.index')}}">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('empleado.index')}}">Empleados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('proveedores.index')}}">Proveedores</a>
        </li>
      </ul>
    </div>
   </nav>

   @yield('main')
   <br>

<footer>
    <div class="jumbotron jumbotronfooter">
      <div class="container">
        <h1 class="display-4">Prototipo de GestinApp </h1>
        <h1 class="display-4">Por Juan Montalvo </h1>
        <p class="lead">2021.</p>
      </div>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>