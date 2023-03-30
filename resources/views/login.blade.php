@extends('layouts.layoutSecundario')

@section('titulo')
   SIGN IN
@endsection

@section('contenido')
    <section class="vh-100 bg-image"
        style="background-image: url('https://img.freepik.com/vector-gratis/elegante-diseno-fondo-onda-suave-azul_1017-33717.jpg?w=2000');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Iniciar sesión</h2>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    @if (session('mensaje'))
                                        <p style="color:red">{{ session('mensaje') }}</p>
                                    @endif

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" id="email" class="form-control" />
                                        <label class="form-label" for="form1Example1">Correo electrónico: </label>
                                    </div>
                                   

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="password" class="form-control" />
                                        <label class="form-label" for="form1Example2">Contraseña: </label>
                                    </div>
                                  
                                    <!-- 2 column grid layout for inline styling -->
                                    <div class="row mb-4">
                                        <p class="text-center text-muted mt-5 mb-0">¿Aún no tienes una cuenta? <a
                                                href="/register" class="fw-bold text-body"><u>¡Registrate aquí!</u></a></p>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
