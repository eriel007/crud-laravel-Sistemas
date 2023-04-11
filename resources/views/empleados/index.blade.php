<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/empleados/index.css" />
    <title>crear empleados</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <table class="table">
        @csrf
        <legend id="titulo">listado de empleado</legend>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido P.</th>
            <th scope="col">Apellido M.</th>
            <th scope="col">sueldo</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
              <tr>
                <td class="counterCell"></td>
                <td><img src="{{$empleado->foto}}"></td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellidoP}}</td>
                <td>{{$empleado->apellidoM}}</td>
                <td>{{$empleado->sueldo}}</td>
                <td>editar|
                    <form action="{{route('empleados.destroy',$empleado->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button id="boton" type="submit" onclick="return confirm("seguro quieres borrar?")">borrar</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
  </body>
</html>
