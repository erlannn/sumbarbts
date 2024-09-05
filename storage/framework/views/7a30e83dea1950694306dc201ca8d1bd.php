<?php $__env->startSection('tittle', 'Dashboard'); ?>
<?php $__env->startSection('navbar', 'active'); ?>
<?php $__env->startSection('content'); ?>
<main class="main">

    <!-- Carousel Section -->

    <section id="hero" class="hero section dark-background">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="4000">
                  <img src="img/img1.jpg"  class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item" data-bs-interval="4000">
                  <img src="img/img2.jpg" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item" data-bs-interval="4000">
                  <img src="img/img3.jpg " class="d-block w-100" alt="...">

              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>


      </div>
  </section>


    <!-- Welcome Section -->


    <!-- Welcome Section -->
    <div class="container">
      <div class="row align-items-center features-item">
        <div class="col-sm-10 col-md-5 col-5 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
            <h3>Selamat Datang di Website SumbarBTS</h3>
            <p>
              Website ini mempermudah melihat dan memantau jaringan telekomunikasi di Sumatera Barat. Peta interaktifnya memungkinkan pengguna menemukan lokasi BTS dan informasi jaringan telekomunikasi di berbagai daerah dengan mudah
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-7 col-7 d-flex align-items-center justify-content-center" data-aos="zoom-out" data-aos-delay="100">
          <div class="videoaja">
            <video muted loop autoplay>
              <source  src="img/vbts.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
      <div class="container jelajah" data-aos="fade-up" data-aos-delay="100">
        <a href="peta.html">
          <button class="btn">Jelajahi Peta</button>
        </a>
      </div>

    </div>


    <!--BTS Section  -->

    <section class="vid">
      <div class="container d-flex">
        <div>
          <div class="text" data-aos="fade-up" data-aos-delay="100">
            <h1>BTS (Base Transceiver Station)</h1>
            <p>BTS adalah menara atau perangkat telekomunikasi seluler yang menghubungkan ponsel dengan jaringan operator, memungkinkan panggilan, pesan, dan penggunaan internet. Biasanya berbentuk menara tinggi dengan antena yang memancarkan sinyal ke berbagai arah untuk memastikan cakupan sinyal yang luas dan stabil.</p>
            <div class="gambarbts" data-aos="fade-up" data-aos-delay="100">
              <div class="container d-flex justify-content-center">
                <div class="textindosat">
                  <div class="card">
                    <img src="img/Indosat.jpg" class="card-img" alt="BTS Indosat">
                    <div class="card-img-overlay">
                      <h5 class="card-title">BTS INDOSAT</h5>
                      <p class="card-text">Mempunyai kaki tiga dan berwarna abu-abu.</p>
                    </div>
                  </div>
                </div>
                <!-- <div class="textlainnya">
                  <div class="card">
                    <img src="/img/Lainnya.jpg" class="card-img" alt="BTS Indosat">
                    <div class="card-img-overlay">
                      <h5 class="card-title">BTS LAINNYA</h5>
                      <p class="card-text">Mempunyai kaki tiga dan berwarna abu-abu.</p>
                    </div>
                  </div>
                </div> -->
                <div class="texttelkomsel">
                  <div class="card">
                    <img src="img/Telkomsel.webp" class="card-img" alt="BTS Indosat">
                    <div class="card-img-overlay">
                      <h5 class="card-title">BTS TELKOMSEL</h5>
                      <p class="card-text">Mempunyai kaki empat dan berwarna merah putih.</p>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="bts" data-aos="fade-down" data-aos-delay="100">
        <h1>Jumlah BTS di Beberapa Daerah Sumatera Barat</h1>
        <p>Sebaran jumlah BTS dengan berbagai operator di Kota Solok, Kota Padang Pariaman, Kabupaten Solok, Kabupaten Pasaman Barat, Kabupaten Sawah Lunto, Kabupaten Lima Puluh Kota, Kabupaten Dhamasraya, Kabupaten Pasaman Timur, Kabupaten Sijunjung, Kabupaten Solok Selatan, Kota Padang, Kota Pariaman</p>
      </div>
    </section>
    <div class="datajumlahbts">
        <div class="container d-flex jumlah" data-aos="fade-down" data-aos-delay="100">
          <div class="me-0 ms-0">
            <h3>120</h3>
            <h4>Telkomsel</h4>
          </div>
          <div class="me-0 ms-0">
            <h3>234</h3>
            <h4>Indosat</h4>
          </div>
          <div class="me-0 ms-0">
            <h3>674</h3>
            <h4>Lainnya</h4>
          </div>
          <div class="me-0 ms-0">
            <h3>12345</h3>
            <h4>Total</h4>
          </div>
        </div>
        <div class="gilustrasi" data-aos="fade-down" data-aos-delay="100">
          <img src="img/ilustrasi.png" alt="ilustrasi bts">
        </div>
    </div>

   <div class="atas">
     <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top">
    <i class="bi bi-arrow-up-circle-fill"></i>
  </a>
   </div>


  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\SumbarBTS-app\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>