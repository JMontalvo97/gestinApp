@extends('layout')
@section('tittle', 'empleados')
    
@section('main')
<body>
    <div class="container-fluid">
        <h4>empleados</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('empleado.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('empleado.create')}}" class="btn btn-success">Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lx-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>opciones</th>
                                <th>ID</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Curp</th>
                                <th>Edad</th>
                                <th>Celular</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($empleados)<=0)
                                <tr>
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($empleados as $empleado)
                            <tr>
                                <td>
                                <a href="{{route('empleado.edit',$empleado->id)}}" class="btn btn-warning btn-sm">Editar</a> |
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-target="#modal-delete-{{$empleado->id}}">
                                    ELIMINAR
                                  </button>
                                </td>
                                <td>{{$empleado->id}}</td>
                                <td>{{$empleado->nombres}}</td>
                                <td>{{$empleado->apellidos}}</td>
                                <td>{{$empleado->curp}}</td>
                                <td>{{$empleado->edad}}</td>
                                <td>{{$empleado->celular}}</td>
                            </tr>
                            @include('empleados.delete')
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
@endsection
