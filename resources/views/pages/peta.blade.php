@extends('index')

@section('tittle', 'Peta')
@section('navbar', 'active')
@section('content')
<main class="main">

    <!-- Carousel Section -->

    <section id="hero" class="hero section dark-background">
  </section>

        <div class="gambarbg">
            <img src="img/bg.jpg" alt="">
        </div>

        <div class="drop">
            <div class="dropdown">
                <button class="btn dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Pilih Kota / Kabupaten
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/daerah">Kota Pariaman</a></li>
                  <li><a class="dropdown-item" href="pariaman.html">Kota Solok</a></li>
                  <li><a class="dropdown-item" href="#">Kota Bukittinggi</a></li>
                  <li><a class="dropdown-item" href="#">Kota Bukittinggi</a></li>
                  <li><a class="dropdown-item" href="#">Kota Bukittinggi</a></li>
                  <li><a class="dropdown-item" href="#">Kota Bukittinggi</a></li>
                  <li><a class="dropdown-item" href="#">Kota Bukittinggi</a></li>
                  <li><a class="dropdown-item" href="#">Kota Bukittinggi</a></li>
                  <li><a class="dropdown-item" href="#">Kota Bukittinggi</a></li>
                  <li><a class="dropdown-item" href="#">Kota Bukittinggi</a></li>
                </ul>
              </div>
        </div>
  </main>
@endsection
