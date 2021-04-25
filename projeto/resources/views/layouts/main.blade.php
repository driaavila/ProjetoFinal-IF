<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   
    </head>
    <body>
   <header>
         <nav class="navbar navbar-expand-lg navbar-light">
         <div class="collapse navbar-collapse" id="navbar">
         <a href="" class="navbar-brand">

         </a>
         <ul class="navbar-nav">
            <li class="nav-item">
            <a href="/" class="nav-link">Cardápios</a>
            </li>
            <li class="nav-item">
            <a href="/cardapio/create" class="nav-link">Criar Cardápio</a>
            </li>
            <li class="nav-item">
            <a href="/" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
            <a href="/" class="nav-link">Cadastrar </a>
            </li>      
        
         </ul>         
         </div>
         </nav>
   </header> 
    <main>
        <div id="container" class="col-md-12">
            <h1> Restaurante Universitário </h1>
        </div>
            
    </main>
    <div class="footer">
    <p>RESTAURANTE UNIVERSITÁRIO &copy; 2021</p>
    </div>
    </body>
</html>
