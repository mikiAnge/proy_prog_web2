<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>@yield('title') - CCA</title>
</head>
<body>
    {{-- Esto es la barra de navegación --}}

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand p-0 me-0 me-lg-2" href="#">
            <img src="http://drive.google.com/uc?export=view&id=1aJwOGaf8eYVu0leSJvJ5NeRiCM3ZR0Ml" width="60" class="d-block my-1" alt="cca_logo">
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Información</a>
              </li>    
            </ul>
          </div>
        </div>
      </nav>
      
    {{-- Aqui visualizamos el contenido de nuestras páginas --}}
    @yield('contenido')

    {{-- Esto es el pie de nuestra página --}}
   
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2023 Company, Inc</p>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a href="#" class="text-muted">
                        <span class="mb-3 mb-md-0 text-muted">Instagram</span>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="#" class="text-muted">
                        <span class="mb-3 mb-md-0 text-muted">Facebook</span>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="#" class="text-muted">
                        <span class="mb-3 mb-md-0 text-muted">TokTok</span>
                    </a>
                </li>
            </ul>
        </footer>
    </div>
    </body>
</html>