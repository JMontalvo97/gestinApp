<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h4>Editar empleado</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('empleado.update', $empleado->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" name="nombres" required maxlength="50" value="{{$empleado->nombres}}">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" required maxlength="50" value="{{$empleado->apellidos}}">
                    </div>
                    <div class="form-group">
                        <label for="curp">Curp</label>
                        <input type="text" class="form-control" name="curp" required maxlength="20" value="{{$empleado->curp}}">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" name="edad" required maxlength="100" value="{{$empleado->edad}}">
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" name="celular" required maxlength="15" value="{{$empleado->celular}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="submit" class="btn btn-primary" value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>