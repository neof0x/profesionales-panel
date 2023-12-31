<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestor de profesionales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Gestor de Profesionales</h1>
        <div class="row">
            <div class="col-xl-12">
                <!-- {{-- nos permite hacer busquedas --}} -->
                <!-- <form action="{{route('profesional.index')}}" method="GET">  {{--estamos enviando la rutra profesional(web) al metodo index--}} -->
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <!-- {{-- boton de busqueda --}} -->
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('profesional.create')}}" class='btn btn-success'>Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>Option</th>
                            <th>Id</th>
                            <th>name</th>
                            <th>apellido</th>
                            <th>dni</th>
                            <th>email</th>
                            <th>profesion</th>
                            <th>programas</th>
                            <th>fecha</th>
                            <th>archivos</th>
                        </thead>
                        <tbody>
                            @if (count($profesionales)<=0)
                                <tr>
                                    <td colspan="10">no hay resultados</td>
                                </tr>
                            @else
                            
                            <!-- {{-- fila profesionales: estas filas se van a ir repitiendo segun cuantos profesionales tengamos --}}
                            @foreach ($profesionales as $profesional) {{-- estamos interando clientes en un objeto llamado cliente, el array profesionales lo recibimos desde PorfesionalController --}} -->
                            <tr>
                                <td><a href="{{route('profesional.edit', $profesional->id)}}" class="btn btn-warning btn-sm">Editar</a> 
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="#modal-delete-{{$profesional->id}}" data-bs-target="#staticBackdrop">
                                    Eliminar
                                </button>
                                </td>
                                <td>{{$profesional->id}}</td>
                                <td>{{$profesional->name}}</td>
                                <td>{{$profesional->apellido}}</td>
                                <td>{{$profesional->dni}}</td>
                                <td>{{$profesional->email}}</td>
                                <td>{{$profesional->profesion}}</td>
                                <td>{{$profesional->programas}}</td>
                                <td>{{$profesional->fecha}}</td>
                                <td>{{$profesional->archivos}}</td>
                            </tr>
                            @include('Profesionales.delete')
                            @endforeach
                            <!-- {{-- end fila profesionales --}} -->
                            @endif
                            
                        </tbody>
                    </table>
                    {{$profesionales->links()}}
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>