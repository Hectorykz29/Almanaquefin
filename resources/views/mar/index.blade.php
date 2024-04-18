<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

     {{-- <style>
        /* Estilos para los labels */
        label {
            font-weight: bold; /* Hace que el texto del label sea más visible */
            margin-bottom: 5px; /* Agrega un espacio entre los labels y los campos de entrada */
            display: block; /* Hace que cada label ocupe una línea completa */
        }
    </style>  --}}
</head>
<body>
     <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Agenda marzo</h3>
          </div>

        {{--
          <div class="col text-right">
            <a href="{{ url('/eneros/create')}}" class="btn btn-sm btn-primary">nuevos datos</a>
          </div>
        </div>
      </div> --}}

      <form action="{{ url('/marzos')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-agregar">Agregar</button>

    </form>

      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($marzos as $marzo)           
          <tr>
            <th scope="row">
              {{$marzo->fecha}}
            </th>
                <td>
                    {{$marzo->description }}
                </td>
             <td>
              <form action="{{ url('/marzos/'.$marzo->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ url('/marzos/'.$marzo->id.'/edit')}}" class="btn btn-editar">Editar</a>
                <button type="submit" class="btn btn-eliminar">Eliminar</button>
              </form>
              
             
            </td>
                
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>