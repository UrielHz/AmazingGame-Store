<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')



    <!-- MDBootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <script scr="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <header>
        <!-- Intro settings -->
        <style>
            /* Default height for small devices */
            #intro-example {
                height: 200px;
            }

            /* Height for devices larger than 992px */
            @media (min-width: 500px) {
                #intro-example {
                    height: 300px;
                }
            }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/">Inicio</a>
                        </li>

                        {{--  
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Registrarte</a>
                        </li>
                          
                        --}}

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Iniciar sesión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Registrate</a>
                            </li>
                        @endguest
                    </ul>
                </div>

                <div class="d-flex align-items-center">

                    @auth
                    <div class="d-flex aling-items-center">
                      <a href="{{route ('post.create')}}" class="btn btn-link px-3 me-2">
                        <i class="fas fa-plus-circle"></i> Crear Post
                      </a>
                    </div>
                    @endauth

                    @auth
                        <form action="/" method="post">
                            @csrf
                            <button class="btn btn-dark mr-10 px-3 me-3" type="submit">
                                Cerrar sesión
                            </button>
                        </form>
                    @endauth
                    
                    @if (Auth::user())
                        <a class="link-secondary me-3" href="#">
                            {{ auth()->user()->name }}</a>
                    @endif

                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <div class="container mt-5 mb-5">
            <h1>@yield('titulo')</h1>
            <hr class="hr">
            @yield('contenido')
        </div>


        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-linkedin-in"></i></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-white" href="">Uriel Hernández</a>
            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>
