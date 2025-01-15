<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="/portal-logo-ade.ico">

    <title>SCHOLARZONE</title>

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

      /*.main-banner .item-1 {*/
      /*  background-image: url(https://cdn-web.ruangguru.com/landing-pages/assets/hs/Jurusan-di-kaist.webp);*/
      /*}*/

      /*.main-banner .item-2 {*/
      /*  background-image: url(https://awsimages.detik.net.id/community/media/visual/2023/11/01/sma-unggulan-ct-arsa-foundation-sukoharjo_169.jpeg?w=1200);*/
      /*}*/

      /*.main-banner .item-3 {*/
      /*  background-image: url(https://awsimages.detik.net.id/community/media/visual/2023/11/01/sma-unggulan-ct-arsa-foundation-sukoharjo_169.jpeg?w=1200);*/
      /*}*/

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
                      <form id="search" action="/dashboard/scholarships" method="GET">
                        <input type="text" placeholder="Type Something" id='searchText' name="search" onkeypress="handle" />
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
                      <li class="scroll-to-section"><a href="{{route('login')}}">Login</a></li>
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

              @foreach ($beasiswas_header as $key => $scholarship)
                  <div class="item item-{{$loop->iteration}}" style="background-image: url({{$scholarship->image_header}})">
                      <div class="header-text">
                          @foreach ($scholarship->categories as $key => $category)
                              <span class="category">{{$category->name}}</span>
                          @endforeach
                          <h2 class="truncate" data-bs-toggle="tooltip" title="{{$scholarship->title}}">{{$scholarship->short_title }}</h2>
                          <p class="truncate"  data-bs-toggle="tooltip" title="{{$scholarship->description}}">{{$scholarship->description}}</p>
                          <div class="buttons">
                              <div class="main-button">
                                  <a href="{{$scholarship->enroll_link}}">Apply Now</a>
                              </div>
                          </div>
                      </div>
                  </div>

              @endforeach


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
                <a href="{{route('dashboard.help')}}">Click Here</a>
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
                <a href="https://t.me/beasiswa">Click Here</a>
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
                <a href="{{route('dashboard.scholarships')}}">Click Here</a>
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
              <a href="{{route('dashboard.scholarships')}}">Discover More</a>
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
          <a href="#!" data-filter=".SMA">SMA</a>
        </li>
        <li>
          <a href="#!" data-filter=".S1">S1</a>
        </li>
        <li>
          <a href="#!" data-filter=".S2">S2</a>
        </li>
        <li>
          <a href="#!" data-filter=".S3">S3</a>
        </li>
      </ul>
      <div class="row event_box">
          @foreach ($beasiswas_latest as $key => $scholarship)
              <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 {{ implode(' ', $scholarship->categories->pluck('name')->toArray()) }}">
                  <div class="events_item">
                      <div class="thumb">
                          <a href="{{$scholarship->information_link}}" "><img style="object-fit: cover;" src="{{$scholarship->image_header}}" class="scholarship-text" alt=""></a>
                          <span class="category">{{ implode(', ', $scholarship->categories->pluck('name')->toArray()) }}</span>

                      </div>
                      <div class="down-content">
                          <span class="author">{{$scholarship->country}}</span>
                          <h4 class="h4 text-truncate" data-bs-toggle="tooltip" title="{{$scholarship->title}}">
                              <a href="{{$scholarship->information_link}}" style="color: black">                              {{$scholarship->title}}
                              </a>
                          </h4>
                      </div>
                  </div>
              </div>
          @endforeach


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
                <img src="https://gapura.uisi.ac.id/assets/upload/user/300x300/f4bc37ead96bf359bdd2736ba1b36b86.jpg" alt="">
                <span class="category">Mahasiswi Akuntansi</span>
                <h4>Budi</h4>
              </div>
            </div>
            <div class="item">
              <p>“Fitur komunitasnya luar biasa! Saya mendapatkan banyak tips dari teman-teman yang sudah lolos beasiswa”</p>
              <div class="author">
                <img style="object-fit: cover; width: 90px; height: 90px;" src="https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcQX2zrwqVMm5lcD277n5WWcPMw7rM9eMj8UIDGHVT-ZbsmRHejE1i6cqPzPi3Hu6w1j3T9u4ZrwgFe3rMU" alt="">
                <span class="category">Siswa SMK</span>
                <h4>Bayu</h4>
              </div>
            </div>
            <div class="item">
              <p>“Saya suka fitur panduan lengkapnya! ScholarZone membuat proses pendaftaran yang awalnya rumit jadi lebih sederhana”</p>
              <div class="author">
                <img src="https://gapura.uisi.ac.id/assets/upload/user/300x300/8ad347812e526dec70649946659d2005.JPG" alt="">
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

          @foreach ($beasiswas_upcoming as $key => $scholarship)

              <div class="col-lg-12 col-md-6">
                  <div class="item">
                      <div class="row">
                          <div class="col-lg-3">
                              <div class="image">
                                  <img src="{{$scholarship->image_url}}"
                                       style="object-fit: cover; height: 220px; width: 200px;">
                              </div>
                          </div>
                          <div class="col-lg-9">
                              <ul>
                                  <li>
                                      <span class="category">S1</span>
                                      <h4 class="schedule-text-wrapping" style="" data-bs-toggle="tooltip" title="{{$scholarship->title}}">{{$scholarship->title}}</h4>
                                  </li>
                                  <li>
                                      <span>Start Date:</span>
                                      <h6>
                                          @php
                                              $date = new DateTime('2025-01-10'); // Membuat objek DateTime
                                              $formattedDate = $date->format('Y-m-d'); // Konversi menjadi string (format: YYYY-MM-DD)

                                              echo htmlspecialchars($formattedDate, ENT_QUOTES, 'UTF-8'); // Tidak akan error
                                              @endphp

                                      </h6>
                                  </li>
                                  <li>
                                      <span>Finish Date:</span>
                                      <h6>{{$scholarship->end_scholarship_date}}</h6>
                                  </li>
                              </ul>
                              <a href="{{$scholarship->information_link}}"><i class="fa fa-angle-right"></i></a>
                          </div>

                      </div>
                  </div>
              </div>


          @endforeach

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
              <!-- Toast Container -->
              <div class="toast-container position-fixed bottom-0 end-0 p-3">
                  <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="d-flex">
                          <div class="toast-body">
                              Pesan berhasil dikirim!
                          </div>
                          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                  </div>
              </div>


              <div id="contact-form" action="#" method="post">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2025 SCHOLARZONE. All rights reserved.</p>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl);
    });

    document.getElementById('form-submit').addEventListener('click', function (event) {
        event.preventDefault(); // Mencegah aksi default form submit (opsional)

        // Ambil elemen toast
        const toastElement = document.getElementById('successToast');

        // Buat instance toast
        const toast = new bootstrap.Toast(toastElement);

        // Tampilkan toast
        toast.show();
    });


  </script>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/6774d9c8af5bfec1dbe56964/1igg75dv7';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
      })();
  </script>
  <!--End of Tawk.to Script-->
  </body>
</html>
