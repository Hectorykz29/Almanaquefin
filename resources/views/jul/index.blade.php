<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

     
</head>
<body>
     <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Agenda julio</h3>
          </div>

      

      <form action="{{ url('/julios')}}" method="POST">
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

            @foreach ($julios as $julio)           
          <tr>
            <th scope="row">
              {{$julio->fecha}}
            </th>
                <td>
                    {{$julio->description }}
                </td>
             <td>
              <form action="{{ url('/julios/'.$julio->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ url('/julios/'.$julio->id.'/edit')}}" class="btn btn-editar">Editar</a>
                <button type="submit" class="btn btn-eliminar">Eliminar</button>
              </form>
              
             
            </td>
                
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>