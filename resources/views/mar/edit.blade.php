<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css.style.css')}}">

     <style>
        /* Estilos para los labels */
        label {
            font-weight: bold; /* Hace que el texto del label sea más visible */
            margin-bottom: 5px; /* Agrega un espacio entre los labels y los campos de entrada */
            display: block; /* Hace que cada label ocupe una línea completa */
        }
    </style> 
</head>
<body>
     <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Editar agenda marzo</h3>
          </div>

        {{--
          <div class="col text-right">
            <a href="{{ url('/eneros/create')}}" class="btn btn-sm btn-primary">nuevos datos</a>
          </div>
        </div>
      </div> --}}

      <form action="{{ url('/marzos/'.$marzo->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" value="{{ old('fecha', $marzo->fecha)}}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" class="form-control" required>{{ old('description', $marzo->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

      
</body>
</html>