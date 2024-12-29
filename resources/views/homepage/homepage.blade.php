<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Scholar - Online School HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/homepage/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/homepage/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="/homepage/assets/css/owl.css">
    <link rel="stylesheet" href="/homepage/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
    <style>
      /* Mengubah gaya tooltip */
      .tooltip-inner {
        background-color: #333; /* Ganti warna latar belakang */
        color: #fff; /* Ganti warna teks */
        font-size: 14px; /* Ganti ukuran font */
        padding: 10px; /* Menambah padding */
        border-radius: 5px; /* Menambah radius border */
        width: 100%; /* Membuat tooltip mengikuti lebar elemen induknya */
        max-width: 420px; /* Menentukan lebar maksimum */
      }

      .tooltip-arrow {
        border-top-color: #333; /* Mengubah warna panah tooltip */
      }

      .scholarship-text {
        width: 500px;
        height: 300px;
        object-fit: fill;
      }

      .schedule-text-wrapping {
        width: 200px; /* Tentukan lebar sesuai kebutuhan */
        white-space: nowrap; /* Membuat teks tetap pada satu baris */
        overflow: hidden; /* Menyembunyikan teks yang lebih panjang */
        text-overflow: ellipsis; /* Menambahkan elipsis "..." pada teks yang dipotong */
      }

      .header-text-wrapping {
        width: 300px; /* Tentukan lebar sesuai kebutuhan */
        height: 200px;
        white-space: nowrap; /* Membuat teks tetap pada satu baris */
        overflow: hidden; /* Menyembunyikan teks yang lebih panjang */
        text-overflow: ellipsis; /* Menambahkan elipsis "..." pada teks yang dipotong */
      }

      .main-banner .item-1 {
        background-image: url(https://cdn-web.ruangguru.com/landing-pages/assets/hs/Jurusan-di-kaist.webp);
      }

      .main-banner .item-2 {
        background-image: url(https://awsimages.detik.net.id/community/media/visual/2023/11/01/sma-unggulan-ct-arsa-foundation-sukoharjo_169.jpeg?w=1200);
      }

    </style>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
<!--                      <img src="assets/images/logo.png" style="width: 200px;">-->
                      <h1>Scholarzone</h1>
                    </a>

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#courses">Scholarship</a></li>
                      <li class="scroll-to-section"><a href="#schedules">Schedules</a></li>
                      <li class="scroll-to-section"><a href="#login">Login</a></li>
                  </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">S1</span>
                <h2 class="" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST...</h2>
                <p></p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Apply Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">SMA</span>
                <h2 class="" data-bs-toggle="tooltip" title="Beasiswa Sekolah Gratis di SMA Unggulan CT ARSA Foundation Sukoharjo Tahun 2025 – 2026 untuk Lulusan SMP/MTs">Beasiswa Sekolah Gratis di SMA Unggulan CT ARSA Foundation...</h2>
                <p>Bentuk Beasiswa: Beasiswa penuh selama pendidikan dan tanpa dipungut biaya</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Apply Now</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="/homepage/assets/images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Panduan Lengkap</h4>
              <p style="margin-bottom: 55px">Dapatkan panduan lengkap cara
                mendaftar beasiswa. Mulai dari memilih
                beasiswa yang tepat, menulis essay
                yang menarik, hingga persiapan
                wawancara..</p>
              <div class="main-button">
                <a href="#">Click Here</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="/homepage/assets/images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Komunitas Beasiswa</h4>
              <p >Bergabunglah dengan komunitas beasiswa
                kami. Diskusikan pengalaman, berbagi tips,
                dan dapatkan informasi terbaru seputar
                beasiswa dari teman-teman sesama
                pemburu beasiswa..</p>
              <div class="main-button">
                <a href="#">Click Here</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="/homepage/assets/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Database Beasiswa</h4>
              <p style="margin-bottom: 80px">Akses database beasiswa terbesar.
                Temukan ribuan beasiswa dari berbagai
                sumber yang telah kami kumpulkan
                khusus untukmu..</p>
              <div class="main-button">
                <a href="#">Click Here</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Where shall we begin?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Perjalanan dimulai dengan langkah pertama: bergabung dengan Scholarzone. Platform kami dirancang untuk memandu Anda dari awal hingga akhir dalam menemukan dan mendapatkan beasiswa yang sesuai dengan kebutuhan Anda. Dari mengisi profil hingga menyaring peluang yang relevan, ScholarZone memastikan setiap langkah Anda terarah dengan baik.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How do we work together?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami memandu: Panduan langkah demi langkah, pengingat deadline, hingga format dokumen,semua tersedia untuk mendukung Anda.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why Scholarzone is the best?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Informasi Terpercaya dan Terupdate: Data beasiswa selalu diperbarui dan diverifikasi dari sumber terpercaya.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Do we get the best support?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Tentu saja! ScholarZone didukung oleh tim profesional dan teknologi terbaik untuk memberikan pengalaman yang luar biasa.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>Apa Itu Scholarzone?</h2>
            <p>Scholarzone adalah platform digital yang dirancang untuk membantu pelajar dan mahasiswa menemukan peluang beasiswa yang sesuai dengan kebutuhan mereka. Kami percaya bahwa setiap individu memiliki hak untuk mengakses pendidikan berkualitas tanpa terkendala biaya. Oleh karena itu, Scholarzone hadir untuk menjadi solusi dalam perjalanan meraih pendidikan impian.
            </p>
            <div class="main-button">
              <a href="#">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>LATEST SCHOLARSHIPS</h6>
            <h2>LATEST SCHOLARSHIPS</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">SMA</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">S1</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">S2</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">S3</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="https://cdn-web.ruangguru.com/landing-pages/assets/hs/Jurusan-di-kaist.webp" class="scholarship-text" alt=""></a>
              <span class="category">S1</span>
            </div>
            <div class="down-content">
              <span class="author">Korea Selatan</span>
              <h4 class="text-truncate" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="https://cdn-web.ruangguru.com/landing-pages/assets/hs/Jurusan-di-kaist.webp" class="scholarship-text" alt=""></a>
              <span class="category">S1</span>
            </div>
            <div class="down-content">
              <span class="author">Korea Selatan</span>
              <h4 class="text-truncate" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="https://cdn-web.ruangguru.com/landing-pages/assets/hs/Jurusan-di-kaist.webp" class="scholarship-text" alt=""></a>
              <span class="category">S1</span>
            </div>
            <div class="down-content">
              <span class="author">Korea Selatan</span>
              <h4 class="text-truncate" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="https://cdn-web.ruangguru.com/landing-pages/assets/hs/Jurusan-di-kaist.webp" class="scholarship-text" alt=""></a>
              <span class="category">S1</span>
            </div>
            <div class="down-content">
              <span class="author">Korea Selatan</span>
              <h4 class="text-truncate" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="https://cdn-web.ruangguru.com/landing-pages/assets/hs/Jurusan-di-kaist.webp" class="scholarship-text" alt=""></a>
              <span class="category">S1</span>
            </div>
            <div class="down-content">
              <span class="author">Korea Selatan</span>
              <h4 class="text-truncate" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="https://cdn-web.ruangguru.com/landing-pages/assets/hs/Jurusan-di-kaist.webp" class="scholarship-text" alt=""></a>
              <span class="category">S1</span>
            </div>
            <div class="down-content">
              <span class="author">Korea Selatan</span>
              <h4 class="text-truncate" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                   <p class="count-text ">Happy Users</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="101" data-speed="1000"></h2>
                  <p class="count-text ">Scholarships</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                  <p class="count-text ">Users Have Applied</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                  <p class="count-text ">Years Experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section testimonials" style="margin-top: 100px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>ScholarZone benar-benar membantu saya menemukan beasiswa yang sesuai dengan jurusan saya</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Mahasiswi Akuntansi</span>
                <h4>Dina</h4>
              </div>
            </div>
            <div class="item">
              <p>“Fitur komunitasnya luar biasa! Saya mendapatkan banyak tips dari teman-teman yang sudah lolos beasiswa”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Siswa SMK</span>
                <h4>Bayu</h4>
              </div>
            </div>
            <div class="item">
              <p>“Saya suka fitur panduan lengkapnya! ScholarZone membuat proses pendaftaran yang awalnya rumit jadi lebih sederhana”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Mahasiswa Informatika</span>
                <h4>Lukman</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p>Kamu bisa mencari database beasiswa yang aktif di halaman dashboard scolarships kami mulai dari category SMA, S1, S2 dan S3.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section events" id="schedules">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Schedule</h6>
            <h2>Upcoming Scholarship</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="https://ieltspresso.com/wp-content/uploads/2024/04/kaist2.jpg" style=" height: 220px;">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">S1</span>
                    <h4 class="schedule-text-wrapping" style="" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea\nAdvanced Institute of Science and Technology) untuk Lulusan\nSMA/Sederajat dan gap year</h4>
                  </li>
                  <li>
                    <span>Start Date:</span>
                    <h6>2024-12-21</h6>
                  </li>
                  <li>
                    <span>Finish Date:</span>
                    <h6>2025-01-07</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="https://ieltspresso.com/wp-content/uploads/2024/04/kaist2.jpg" style=" height: 220px;">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">S1</span>
                    <h4 class="schedule-text-wrapping" style="" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea\nAdvanced Institute of Science and Technology) untuk Lulusan\nSMA/Sederajat dan gap year</h4>
                  </li>
                  <li>
                    <span>Start Date:</span>
                    <h6>2024-12-21</h6>
                  </li>
                  <li>
                    <span>Finish Date:</span>
                    <h6>2025-01-07</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="https://ieltspresso.com/wp-content/uploads/2024/04/kaist2.jpg" style=" height: 220px;">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">S1</span>
                    <h4 class="schedule-text-wrapping" style="" data-bs-toggle="tooltip" title="Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea Advanced Institute of Science and Technology) untuk Lulusan SMA Sederajat dan gap year">Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea\nAdvanced Institute of Science and Technology) untuk Lulusan\nSMA/Sederajat dan gap year</h4>
                  </li>
                  <li>
                    <span>Start Date:</span>
                    <h6>2024-12-21</h6>
                  </li>
                  <li>
                    <span>Finish Date:</span>
                    <h6>2025-01-07</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to contact us anytime</h2>
            <p>Thank you for choosing ScholarZone! We offer the best scholarship information and resources, all 100% free of charge. You can support us by sharing our website with your friends, helping more students achieve their educational dreams.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2025 SCHOLARZONE. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com" rel="nofollow" target="_blank">ThemeWagon</a></p>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/homepage/vendor/jquery/jquery.min.js"></script>
  <script src="/homepage/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/homepage/assets/js/isotope.min.js"></script>
  <script src="/homepage/assets/js/owl-carousel.js"></script>
  <script src="/homepage/assets/js/counter.js"></script>
  <script src="/homepage/assets/js/custom.js"></script>
  <!-- Popper.js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>
  </body>
</html>
