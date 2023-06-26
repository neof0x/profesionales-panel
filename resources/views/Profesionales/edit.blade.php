<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar profesionales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar profesional</h1>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('Profesional.update', $profesional->id)}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" require maxlength="50" value="{{$profesional->name}}">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido" require maxlength="50" value="{{$profesional->apellido}}">
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" name="dni" value="{{$profesional->dni}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" require maxlength="50" value="{{$profesional->email}}">
                    </div>
                    <div class="form-group">
                        <label for="profesion">Profesion</label>
                        <input type="text" class="form-control" name="profesion" require maxlength="50" value="{{$profesional->profesion}}">
                    </div>
                    <div class="form-group">
                        <label for="programas">Programas</label>
                        <input type="text" class="form-control" name="programas" require maxlength="50" value="{{$profesional->programas}}">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="text" class="form-control" name="fecha" require maxlength="50" value="{{$profesional->fecha}}">
                    </div>
                    <div class="form-group">
                        <label for="archivos">Archivos</label>
                        <input type="text" class="form-control" name="archivos" require maxlength="50" value="{{$profesional->archivo}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="btn btn-primary" value="Guardar">
                        <input type="text" class="btn btn-primary" value="Cancelar">
                        <a href="javascript:history.black()">Ir al listado</a>
                    </div>
                </form>
            </div>
        </div>       
    </div>
</body>
</html>