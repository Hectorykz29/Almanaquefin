<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
    
</head>
<body>
    

    
    <div class="container">
        <H3 class="agenda">AGENDA </H3>
        <div class="button-container">
            
            <a href="{{ url('/eneros')}}" class="btn btn-enero">
                <i class="ni ni-chart-pie-35"></i>
                <span class="hide-menu">ENERO</span>
                
            </a>
            <a href="{{ url('/febreros')}}" class="btn btn-febrero">
                <i class="ni ni-chart-pie-35"></i>
                
                FEBRERO
            </a>
            <a href="{{ url('/marzos')}}" class="btn btn-marzo">
                <i class="ni ni-chart-pie-35"></i>
                
                MARZO
            </a>
            <a href="{{ url('/abrils')}}" class="btn btn-abril">
                <i class=""></i>
                
                ABRIL
            </a>
            <a href="{{ url('/mayos')}}" class="btn btn-mayo">
                <i class="ni ni-chart-pie-35"></i>
                
                MAYO
            </a>
            <a href="{{ url('junios')}}" class="btn btn-junio">
                <i class="ni ni-chart-pie-35"></i>
                
                JUNIO
            </a>
            <a href="{{ url('julios')}}" class="btn btn-julio">
                <i class="ni ni-chart-pie-35"></i>
                
                JULIO
            </a>
            <a href="{{ url('agostos')}}" class="btn btn-agosto">
                <i class="ni ni-chart-pie-35"></i>
                
                AGOSTO
            </a>
            <a href="{{ url('setiembres')}}" class="btn btn-setiembre">
                <i class="ni ni-chart-pie-35"></i>
                
                SETIEMBRE
            </a>
            <a href="{{ url('octubres')}}" class="btn btn-octubre">
                <i class="ni ni-chart-pie-35"></i>
                
                OCTUBRE
            </a>
            <a href="{{ url('noviembres')}}" class="btn btn-noviembre">
                <i class="ni ni-chart-pie-35"></i>
                
                NOVIEMBRE
            </a>
            <a href="{{ url('diciembres')}}" class="btn btn-diciembre">
                <i class="ni ni-chart-pie-35"></i>
                
                DICIEMBRE
            </a>
        </div>
    </div>


</body>
</html>