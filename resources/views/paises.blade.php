<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
<center>
<h1 class="display-1">Paises Sudamericanos</h1>
</center>
<hr>
<h4 class="display-4"> Informacion general de paises sudamericanos</h4>

<br><br>

<table class="table table-bordered">
    <thead >   
    <tr class="table-info">
        <th>Pais</th>
        <th>Capital</th>
        <th>Moneda</th>
        <th>Poblacion</th>
        <th>Ciudades</th>
    </tr>    
    </thead>

    <tbody>   
        @foreach($paises as $pais => $infopais)
            <tr>
                <td>{{ $pais }}</td>
                <td>{{ $infopais["Capital"]}}</td>
                <td>{{$infopais["Moneda"]}}</td>
                <td>{{$infopais["Poblacion"]}}</td>
            </tr>
        @endforeach
        
    </tbody>

    <tfoot></tfoot>
</table>
    
</body>
</html>