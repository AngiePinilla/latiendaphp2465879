<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Baloo+Tammudu+2&family=Days+One&family=Prompt:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="img/logo.png">
    <title>Productos</title>
</head>
<body>
    
 <nav>
    <div class="nav-wrapper deep-purple">
      <a href="{{ route('productos.index') }}" class="brand-logo center">Tiendita</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="{{ route('productos.index') }}">Inicio</a></li>
        <li><a href="{{ route('productos.create') }}">Registrar producto</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

 
  <div class="container">
        @yield('contenido')
  </div>

<script src="{{ asset('/materialize/js/materialize.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
  });
</script>
</body>
</html>