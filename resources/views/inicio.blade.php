@extends('layout')
@section('tittle', 'Inicio')
    
@section('main')
<body>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/empleados.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Empleados</h5>
                  <a href="{{route('empleado.index')}}" class="btn btn-primary">Gestionar</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/productos.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Productos</h5> 
                  <a href="{{route('productos.index')}}" class="btn btn-primary">Gestionar</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/proveedores.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Proveedores</h5>
                  <a href="{{route('proveedores.index')}}" class="btn btn-primary">Gestionar</a>
                </div>
              </div>
        </div>
      </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

@endsection

