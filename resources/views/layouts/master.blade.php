<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TABELLONE TRENI</title>

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  {{-- font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Dosis:wght@600&family=Fredoka:wdth,wght@97.7,300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@600&family=Poiret+One&family=Roboto+Slab:wght@344&family=Share+Tech+Mono&display=swap" rel="stylesheet">

</head>
<body>
  <header>
    @include('../partials/headerNav')
  </header>
  
  @yield('component')
  
</body>
</html>