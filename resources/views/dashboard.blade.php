@extends('layouts.layoutPrincipal')

@section('titulo')
@endsection

@section('contenido')
    <br>
    <br>
    @if ($posts->count())
        <h1 class="card-title text-center"> MIS PUBLICACIONES:</h1>
        <br>
        <br>
        <div class="row row-cols-md-3 g-3">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('uploads') . '/' . $post->imagen }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->titulo }}</h4>
                            <h6 class="card-title">{{ $post->descripcion }}</h6>
                            <p class="card-title">
                                <small class="text-info">{{ '@' . $post->user->username }}</small>
                                <small class="text-muted">{{ $post->created_at }}</small>
                            </p>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
        <div> {{ $posts->links('pagination::bootstrap-5') }}
        @else
            <h1 class="text-center">NO HAY PUBLICACIONES</h1>
    @endif
    <br>
    <br>
    <h1>Gracias por registrarte e inciar sesión. Tienes acceso a los siguientes juegos exclusivos:</h1>
    <br>
    <br>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="https://images6.alphacoders.com/425/425160.jpg" />
                <div class="card-body">
                    <h5 class="card-title">Assassin's Creed</h5>
                    <p class="card-text">
                        Assassin's Creed es un videojuego de acción, aventura y sigilo de estilo sandbox de 2007
                        desarrollado por Ubisoft Montreal y publicado por Ubisoft.
                    </p>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Descargar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel1">Assassin's Creed</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Se descargará automaticamente el instalador del juego <b>Assassin's Creed</b> en su
                                ordenador. ¡Gracias por usar AmazingGame Store!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Confirmar descarga</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://images7.alphacoders.com/108/thumb-1920-1082482.jpg" class="card-img-top"
                    alt="Palm Springs Road" />
                <div class="card-body">
                    <h5 class="card-title">Spider-Man: Miles Morales</h5>
                    <p class="card-text">
                        Tras los eventos de Marvel's Spider-Man Remasterizado, el adolescente Miles Morales intenta
                        adaptarse a su nuevo hogar siguiendo los pasos de su mentor, Peter Parker, como el nuevo Spider-Man.
                    </p>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Descargar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel2">Spider-Man: Miles Morales</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Se descargará automaticamente el instalador del juego <b>Spider-Man: Miles Morales</b> en su
                                ordenador. ¡Gracias por usar AmazingGame Store!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Confirmar descarga</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://wallpaperaccess.com/full/889450.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">Tom Clancy's Rainbow Six: Siege</h5>
                    <p class="card-text">Es un shooter de élite, táctico y realista, basado en equipos, donde triunfan la
                        planificación y ejecución superiores. Cuenta con ataques 5v5 frente a juego de defensa y un intenso
                        combate cuerpo a cuerpo en entornos destructibles.
                    </p>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    Descargar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel3">Tom Clancy's Rainbow Six: Siege</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Se descargará automaticamente el instalador del juego <b>Tom Clancy's Rainbow Six: Siege</b>
                                en su ordenador. ¡Gracias por usar AmazingGame Store!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Confirmar descarga</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://wallpapercave.com/wp/wp7775348.jpg" class="card-img-top" alt="Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">Phasmophobia</h5>
                    <p class="card-text">
                        Phasmophobia es un horror psicológico cooperativo en línea para 4 jugadores. La actividad paranormal
                        va en aumento y depende de usted y su equipo usar todo el equipo de caza de fantasmas a su
                        disposición para recopilar la mayor cantidad de evidencia posible.
                    </p>
                </div>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                    Descargar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel4">Phasmophobia</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Se descargará automaticamente el instalador del juego <b>Phasmophobia</b> en su ordenador.
                                ¡Gracias por usar AmazingGame Store!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Confirmar descarga</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
