formulario para editar cada empleadosformulario que tendra datos en comun con crear y editar
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/empleados/crear.css" />
    <title>formulario</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    
    <form action="{{route('empleados.update',$empleado->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        <legend id="titulo">formulario</legend>
        <div class="mb-3">
          <label for="disabledSelect" class="form-label">nombre</label>
          <input name="nombre" type="text"  class="form-control"  value="{{$empleado->nombre}}">
        </div>
        <div class="mb-3">
          <label for="disabledSelect" class="form-label">Apellido Paterno</label>
          <input name="apellidoP" type="text"  class="form-control"  value="{{$empleado->apellidoP}}">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Apellido Materno</label>
            <input name="apellidoM" type="text" class="form-control"  value="{{$empleado->apellidoM}}">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">foto</label>
            <input name="foto" type="file"  class="form-control" value="{{$empleado->foto}}">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">sueldo</label>
            <input name="sueldo" type="number"  class="form-control" value="{{$empleado->sueldo}}">
        </div>
        <button type="submit" class="btn btn-primary">guardar</button>
    </form>
    
    <!-- End Example Code -->
  </body>
</html>
