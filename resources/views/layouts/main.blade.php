<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>        
        
        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">           
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

     <!--css da aplicação -->
     <link rel="stylesheet" href="/css/style.css">

        <script src="/js/scripts.js"></script>    
              
    </head>
        <body>  
            <header>
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/"> <img src="/img/logotest.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Eventos <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/events/create">Criar Eventos</a>
                        </li>
                        @auth
                          <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus Eventos</a>
                          </li> 
                          <li class="nav-item">
                            <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault();
                            this.closest('form').submit();">Sair</a>
                            </form>
                          </li>
                        @endauth

                        @guest
                        <li class="nav-item">
                          <a class="nav-link" href="/login">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Cadastrar</a>
                        </li> 
                        @endguest                       
                      </ul>
                    </div>
                  </nav>
            </header>

            {{-- @yield('content')    {{-- mudar o conteúdo da página dinamicamente--}}

            <main>
              <div class="container-fluid">
                <div class="row">
                  @if (session('msg'))
                      <p class="msg"> {{ session('msg') }} </p>
                  @endif
                  @yield('content') 
                </div>
              </div>
            </main>
            
            
            <footer>
                <p>HDC Events &copy; 2021 </p>
            </footer>


            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </body>
</html>