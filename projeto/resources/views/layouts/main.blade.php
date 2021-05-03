<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://www.google.com.br/url?sa=i&url=https%3A%2F%2Fportal.poa.ifsuldeminas.edu.br%2F&psig=AOvVaw17XDniIpW6ZOUBZuZeGjaQ&ust=1619741662553000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMCi5ImWovACFQAAAAAdAAAAABAD">
        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src ="/js/scripts.js"></script>   
   
    </head>
    <body>
   <header>
         <nav class="navbar navbar-expand-lg navbar-light">
         <div class="collapse navbar-collapse" id="navbar">
         <a href="" class="navbar-brand">
         <img src="/img/logo.png" alt="Restaurante Universitário">
         </a>
         <ul class="navbar-nav">
            <li class="nav-item">
            <a href="/" class="nav-link">Cardápios</a>
            </li>
            <li class="nav-item">
            <a href="/cardapio/info" class="nav-link">Informações</a>
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

        <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
        </div>            
    </main>
    <div class="footer">
    <p>RESTAURANTE UNIVERSITÁRIO &copy; 2021</p>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>
