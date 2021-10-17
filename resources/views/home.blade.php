@include("layouts.header")

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(images/profil1.png)">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(images/profil2.jpg)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

<main id="main">

    <!-- ======= My & Family Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>SELAMAT DATANG DI PROFIL</h2>
          <p>NUR LIZA MUTIARA DINI</p>
        </div>

      </div>
    </section><!-- End My & Family Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <h4 class="title"><a href="">Sukses</a></h4>
            <p class="description">Kunci kesuksesab adalah fokus pada tujuan bukan hambatan.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <h4 class="title"><a href="">Belajar</a></h4>
            <p class="description">Bersemangatlah dalam mempelajari sesuatu yang bermanfaat.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <h4 class="title"><a href=""></a>Semangat</h4>
            <p class="description">Jangan takut menghadapi masa depan, hadapi dan perjuangkanlah.</p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->



</body>

</html>
@include("layouts.footer")
