@extends('layouts.layoutPrincipal')

@section('titulo')
  Catálogo de juegos 
@endsection

@section('contenido')
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="https://www.callofduty.com/content/dam/atvi/infinityward/iw-touchui/news/feature/2022/11/WZ2-S01-DMZ-TACTICS-TOUT.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
        <div class="card-body">
          <h5 class="card-title">Call of Duty Warzone 2.0</h5>
          <p class="card-text">
            Call of Duty: Warzone es un videojuego de disparos en primera persona, perteneciente al género Battle royale gratuito, lanzado el 10 de marzo de 2020 para PlayStation 4, PlayStation 5, Xbox One, Xbox Series X|S y Microsoft Windows.
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="http://trumpwallpapers.com/wp-content/uploads/Fortnite-Wallpaper-01-1920-x-1080.jpg" class="card-img-top" alt="Palm Springs Road"/>
        <div class="card-body">
          <h5 class="card-title">Fortnite</h5>
          <p class="card-text">
            Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor de juego y mecánicas.
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://wallpapercave.com/wp/wp7048938.png" class="card-img-top" alt="Los Angeles Skyscrapers"/>
        <div class="card-body">
          <h5 class="card-title">Fall guys</h5>
          <p class="card-text">Fall Guys (conocido anteriormente como Fall Guys: Ultimate Knockout) es un videojuego de plataformas y battle royale desarrollado por Mediatonic y publicado inicialmente por Devolver Digital y más tarde por Epic Games. </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://images2.alphacoders.com/120/thumb-1920-1204924.jpg" class="card-img-top" alt="Skyscrapers"/>
        <div class="card-body">
          <h5 class="card-title">Valorant</h5>
          <p class="card-text">
            Valorant es un hero shooter en primera persona multijugador gratuito. Valorant se inspira en la serie de videojuegos de disparos táctico Counter-Strike y toma prestadas varias mecánicas, como el menú de compra, los patrones de spray y la imprecisión al moverse.
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection