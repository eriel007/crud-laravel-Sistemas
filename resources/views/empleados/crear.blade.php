<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/empleados/crear.css" />
    <title>crear empleados</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    @extends('layouts.app')
    @section('content')
    <form action="{{route('empleados.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <legend id="titulo">creacion de empleado</legend>
        <div class="mb-3">
          <label for="disabledSelect" class="form-label">nombre</label>
          <input name="nombre" type="text"  class="form-control"  placeholder="ingrese un nombre">
        </div>
        <div class="mb-3">
          <label for="disabledSelect" class="form-label">Apellido Paterno</label>
          <input name="apellidoP" type="text"  class="form-control" placeholder="ingrese su apellido paterno">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Apellido Materno</label>
            <input name="apellidoM" type="text" class="form-control" placeholder="ingrese su apellido materno">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">foto</label>
            <input name="foto" type="file"  class="form-control" placeholder="archivo">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">sueldo</label>
            <input name="sueldo" type="number"  class="form-control" placeholder="ingrese el sueldo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
    
    <!-- End Example Code -->
  </body>
</html>
