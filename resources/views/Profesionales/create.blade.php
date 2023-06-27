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
        <h1>Registrar profesional</h1>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('profesional.store')}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" name="dni" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="profesion">Profesion</label>
                        <input type="text" class="form-control" name="profesion" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="programas">Programas</label>
                        <input type="text" class="form-control" name="programas">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="text" class="form-control" name="fecha" >
                    </div>
                    <div class="form-group">
                        <label for="archivos">Archivos</label>
                        <input type="text" class="form-control" name="archivos" >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>
            </div>
        </div>       
    </div>
</body>
</html>