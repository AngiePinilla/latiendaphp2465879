<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Paises</title>
</head>
<body>
<center>
<h1 class="display-1">Paises Sudamericanos</h1>
</center>
<hr>
<h4 class="display-4"> Informacion general de paises sudamericanos</h4>

<br><br>

<table class="table table-bordered" width=50% height=300px>
    <thead >   
    <tr class="table-info">
        <th >Pais</th>
        <th>Capital</th>
        <th>Moneda</th>
        <th>Poblacion</th>
        <th>Ciudades</th>
    </tr>    
    </thead>

    <tbody>   
        @foreach($paises as $pais => $infopais)
            <tr>
                <td rowspan=" {{ count($infopais['Ciudades']) }}" >{{ $pais }}</td>
                <td class="text-info" rowspan=" {{ count($infopais['Ciudades']) }}" >{{ $infopais["Capital"]}}</td>
                <td rowspan=" {{ count($infopais['Ciudades']) }}" >{{$infopais["Moneda"]}}</td>
                <td rowspan=" {{ count($infopais['Ciudades']) }}" >{{$infopais["Poblacion"]}}</td>
                @foreach($infopais["Ciudades"] as $ciudad)
                    <td>{{ $ciudad }}</td>
            
            
            </tr>
                @endforeach
        @endforeach
        
    </tbody>

    <tfoot></tfoot>
</table>
    
</body>
</html>