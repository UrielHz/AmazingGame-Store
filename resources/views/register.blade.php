@extends('layouts.layoutSecundario')

@section('titulo')
    SIGN UP
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
                                <h2 class="text-uppercase text-center mb-5">Crea tu cuenta</h2>
                                <form action="/register" method="POST">
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <input type="text" name="name" id="name" class="form-control" />
                                        <label class="form-label" for="name">Nombre: </label>
                                    </div>
                                    @error('name')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror

                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" id="username" class="form-control" />
                                        <label class="form-label" for="username">Nombre de usuario: </label>
                                    </div>
                                    @error('username')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror


                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" id="email" class="form-control" />
                                        <label class="form-label" for="email">Correo electrónico: </label>
                                    </div>
                                    @error('email')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror


                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="password" class="form-control" />
                                        <label class="form-label" for="password">Contraseña: </label>
                                    </div>
                                    @error('password')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">¿Ya tienes una cuenta? <a href="/login"
                                            class="fw-bold text-body"><u>¡Inicia sesión aquí!</u></a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
