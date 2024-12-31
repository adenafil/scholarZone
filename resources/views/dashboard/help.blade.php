<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="/dashboard-template/favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="/dashboard-template/assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="/dashboard-template/assets/css/portal.css">

</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
	        <div class="container-fluid py-2">
		        <div class="app-header-content">
		            <div class="row justify-content-between align-items-center">

				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		            <div class="search-mobile-trigger d-sm-none col">
			            <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
			        </div><!--//col-->
		            <div class="app-search-box col">
		                <form class="app-search-form">
							<input type="text" placeholder="Search..." name="search" class="form-control search-input">
							<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
				        </form>
		            </div><!--//app-search-box-->

                        <div class="app-utilities col-auto">
                            <div class="app-utility-item app-notifications-dropdown dropdown link-notifications">
                                <a  class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
                                        <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                    </svg>
                                    <span class="icon-badge">3</span>
                                </a><!--//dropdown-toggle-->

                            </div><!--//app-utility-item-->
                            <div class="app-utility-item">
                                <a href="{{route('dashboard.profile')}}" title="Settings">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                                        <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                                    </svg>
                                </a>
                            </div><!--//app-utility-item-->

                            <div class="app-utility-item app-user-dropdown dropdown">
                                <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img class="rounded rounded-5" src="https://i.pinimg.com/736x/09/21/fc/0921fc87aa989330b8d403014bf4f340.jpg" alt="user profile"></a>
                                <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                    <li><a class="dropdown-item" href="{{route('dashboard.profile')}}">Settings</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item"">                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="dropdown-item" style="background: none; border: none; padding: 0; cursor: pointer;">
                                                Log Out
                                            </button>
                                        </form>
                                        </a></li>

                                </ul>
                            </div><!--//app-user-dropdown-->
                        </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel sidepanel-hidden">
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="{{route('dashboard')}}"><img class="logo-icon me-2" src="/dashboard-template/assets/images/portal-logo-ade.svg" alt="logo"><span class="logo-text">PORTAL</span></a>

		        </div><!--//app-branding-->
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="{{route('dashboard')}}">
						        <span class="nav-icon">
    <img  src="https://img.icons8.com/?size=100&id=i6fZC6wuprSu&format=png&color=595C5F"  alt="Icon" class=" bi bi-house-door navIcon"   data-hover="https://img.icons8.com/?size=100&id=i6fZC6wuprSu&format=png&color=7B6ADA"
          data-active="https://img.icons8.com/?size=100&id=i6fZC6wuprSu&format=png&color=595C5F">
						         </span>
                                <span class="nav-link-text">Overview</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="{{route('dashboard.applications')}}">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/application.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/application-hover.svg"
          data-active="/dashboard-template/assets/images/application.svg">

						         </span>
                                <span class="nav-link-text">Applications</span>
                            </a><!--//nav-link-->


                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="{{route('dashboard.scholarships')}}">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/scholarship.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/scholarship-hover.svg"
          data-active="/dashboard-template/assets/images/scholarship.svg">

						         </span>
                                <span class="nav-link-text">Scholarship</span>
                            </a><!--//nav-link-->


                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="{{route('dashboard.documents')}}">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/document.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/document-hover.svg"
          data-active="/dashboard-template/assets/images/document.svg">

						         </span>
                                <span class="nav-link-text">Documents</span>
                            </a><!--//nav-link-->


                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link active" href="{{route('dashboard.help')}}">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/help-hover.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/help-hover.svg"
          data-active="/dashboard-template/assets/images/help-hover.svg">

						         </span>
                                <span class="nav-link-text">Help</span>
                            </a><!--//nav-link-->


                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="{{route('dashboard.profile')}}">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/setting.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/setting-helper.svg"
          data-active="/dashboard-template/assets/images/setting.svg">

						         </span>
                                <span class="nav-link-text">Settings</span>
                            </a><!--//nav-link-->


                        </li><!--//nav-item-->

                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link logout">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/logout.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/logout-hover.png"
          data-active="/dashboard-template/assets/images/logout.svg">

						         </span>
                                <span class="nav-link-text">Log out</span>
                            </a><!--//nav-link-->


                        </li><!--//nav-item-->
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->

    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

			    <h1 class="app-page-title">Help Center</h1>
                <div class="app-card app-card-accordion shadow-sm mb-4">
				    <div class="app-card-header p-4 pb-2  border-0">
				       <h4 class="app-card-title">Frequently Asked Question</h4>
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4 pt-0">
					    <div id="faq1-accordion" class="faq1-accordion faq-accordion accordion">

						    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-1">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-1" aria-expanded="false" aria-controls="faq1-1">
									  Bagaimana cara mendaftar beasiswa ?							      </button>
							    </h2>
							    <div id="faq1-1" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-1">
							        <div class="accordion-body text-start p4">
										Anda bisa mendaftar dengan membuat akun terlebih dahulu. Setelah itu, lengkapi formulir pendaftaran dan unggah dokumen yang dibutuhkan sesuai jenjang (SMA, S1, S2, S3).
										<br>Apa saja persyaratan umum untuk mendaftar beasiswa?<br>
										• SMA: Rapor semester terakhir, surat rekomendasi, dan data pribadi. <br>
										• S1: Ijazah SMA/SMK, transkrip nilai, surat rekomendasi, dan esai motivasi. <br>
										• S2 dan S3: Ijazah S1/S2, transkrip nilai, proposal penelitian (untuk S3), dan surat rekomendasi akademik.							        </div>
							    </div>
							</div><!--//accordion-item-->

						    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-2">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-2" aria-expanded="false" aria-controls="faq1-2">
									  Dokumen apa yang perlu saya siapkan ?							      </button>
							    </h2>
							    <div id="faq1-2" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-2">
							        <div class="accordion-body text-start p4">
										Dokumen apa yang perlu saya siapkan?
										Dokumen yang dibutuhkan tergantung jenjang pendidikan Anda: <br>
										- SMA: Rapor semester terakhir, surat rekomendasi, dan data pribadi. <br>
										- S1: Ijazah SMA/SMK, transkrip nilai, surat rekomendasi, dan esai motivasi. <br>
										- S2 & S3: Ijazah dan transkrip nilai S1/S2, proposal penelitian (khusus S3), serta surat rekomendasi akademik. <br>
										Pastikan semua dokumen dalam format yang diminta (PDF atau JPG) dan tidak melebihi batas ukuran file.							        </div>
							    </div>
							</div><!--//accordion-item-->


						    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-3">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-3" aria-expanded="false" aria-controls="faq1-3">
									  Bagaimana jika saya belum memiliki surat rekomendasi ?							      </button>
							    </h2>
							    <div id="faq1-3" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-3">
							        <div class="accordion-body text-start p4">
										Bagaimana jika saya belum memiliki surat rekomendasi?
										Jika belum memiliki surat rekomendasi, Anda dapat: <br>
										- Menghubungi dosen, guru, atau atasan Anda yang memahami prestasi dan kemampuan Anda. <br>
										- Jelaskan tujuan Anda melamar beasiswa dan bagaimana surat rekomendasi tersebut membantu proses seleksi. <br>
										- Minta surat rekomendasi setidaknya dua minggu sebelum tenggat waktu untuk menghindari keterlambatan.							        </div>
							    </div>
							</div><!--//accordion-item-->

							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-4">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-4" aria-expanded="false" aria-controls="faq1-4">
									  Bagaimana tahapan proses seleksi beasiswa ?							      </button>
							    </h2>
							    <div id="faq1-4" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-4">
							        <div class="accordion-body text-start p4">
										Tahapan proses seleksi beasiswa biasanya mencakup: <br>
										1. Pendaftaran: Isi formulir dan unggah dokumen yang diminta. <br>
										2. Seleksi administrasi: Panitia memverifikasi dokumen dan memastikan kelengkapan data. <br>
										3. Tes tertulis atau wawancara: Tes ini untuk menilai kemampuan akademik, potensi, dan motivasi Anda. <br>
										4. Pengumuman hasil: Hasil seleksi akan diumumkan melalui email atau website resmi.
									</div>
							    </div>
							</div><!--//accordion-item-->

							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-5">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-5" aria-expanded="false" aria-controls="faq1-5">
									  Kapan pengumuman hasil seleksi beasiswa ?							      </button>
							    </h2>
							    <div id="faq1-5" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-5">
							        <div class="accordion-body text-start p4">
										Kapan pengumuman hasil seleksi beasiswa?
										Pengumuman hasil seleksi biasanya dilakukan dalam waktu 2-4 minggu setelah semua tahapan seleksi selesai. Anda akan diberi tahu melalui: <br>
										- Email resmi dari penyelenggara. <br>
										- Website atau dashboard akun pendaftaran Anda. <br>
										- Pastikan untuk memeriksa secara berkala agar tidak melewatkan informasi penting.
									</div>
							    </div>
							</div><!--//accordion-item-->

							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-6">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-6" aria-expanded="false" aria-controls="faq1-6">
									  Saya mengalami kendala saat mengunggah dokumen, apa yang harus saya lakukan?							      </button>
							    </h2>
							    <div id="faq1-6" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-6">
							        <div class="accordion-body text-start p4">
										Saya mengalami kendala saat mengunggah dokumen, apa yang harus saya lakukan?
										Jika mengalami kendala saat mengunggah dokumen: <br>
										- Periksa kembali format file (PDF atau JPG) dan ukuran file sesuai dengan ketentuan. <br>
										- Pastikan koneksi internet stabil saat melakukan upload. <br>
										- Gunakan perangkat lain (laptop/PC) jika kendala terjadi di ponsel. <br>
										- Hubungi layanan bantuan penyelenggara beasiswa jika masalah tetap berlanjut.
									</div>
							    </div>
							</div><!--//accordion-item-->

	                    </div><!--//faq1-accordion-->
				    </div><!--//app-card-body-->
				</div><!--//app-card-->

				<div class="row g-4">
					<div class="col-12 col-md-12">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder icon-holder-mono">
										    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-headset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a5 5 0 0 0-5 5v4.5H2V6a6 6 0 1 1 12 0v4.5h-1V6a5 5 0 0 0-5-5z"/>
  <path d="M11 8a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8zM5 8a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8z"/>
  <path fill-rule="evenodd" d="M13.5 8.5a.5.5 0 0 1 .5.5v3a2.5 2.5 0 0 1-2.5 2.5H8a.5.5 0 0 1 0-1h3.5A1.5 1.5 0 0 0 13 12V9a.5.5 0 0 1 .5-.5z"/>
  <path d="M6.5 14a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1z"/>
</svg>
									    </div><!--//icon-holder-->

							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">Need more help?</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4">

							    <div class="intro mb-3">
									Kami siap membantu Anda mendapatkan informasi lebih lanjut mengenai pendaftaran dan proses seleksi beasiswa dari SMA hingga S3. Jangan ragu untuk menghubungi kami jika ada kendala atau pertanyaan.
								</div>
							    <ul class="list-unstyled">
								    <li><strong>Tel:</strong> +62877-5651-4478</li>
								    <li><strong>Email:</strong> <a href="#">support@scholarzone.my.id</a></li>
							    </ul>
						    </div><!--//app-card-body-->
						    <div class="app-card-footer p-4 mt-auto">
							   <a class="btn app-btn-secondary" href="#">Start Live Chat</a>
								<a class="btn app-btn-secondary" style="color: white;
background-color: #007bff;
height: 40px;
" href="#"><span><img src="/dashboard-template/assets/images/tele.svg" alt="" srcset=""></span> Join Our Community</a>
							</div><!--//app-card-footer-->
						</div><!--//app-card-->
					</div><!--//col-->
				</div><!--//row-->

		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

    </div><!--//app-wrapper-->


    <!-- Javascript -->
    <script src="/dashboard-template/assets/plugins/popper.min.js"></script>
    <script src="/dashboard-template/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="/dashboard-template/assets/js/app.js"></script>
    <script>
        const defaultImages = [
            'https://img.icons8.com/?size=100&id=i6fZC6wuprSu&format=png&color=595C5F',
            '/dashboard-template/assets/images/application.svg',
            '/dashboard-template/assets/images/scholarship.svg',
            '/dashboard-template/assets/images/document.svg',
            '/dashboard-template/assets/images/help.svg',
            '/dashboard-template/assets/images/setting.svg',
            '/dashboard-template/assets/images/logout.svg'
        ];

        const navItems = document.querySelectorAll('.navIcon'); // Ubah dari #navIcon menjadi .navIcon

        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach((link, index) => {
            console.log('hello')
            if (index  !== 4) {
                console.log('link index' + index)
                const navIcon = link.querySelector('span img');
                console.log(navIcon);

                link.addEventListener('mouseenter', function () {
                    navIcon.src = navIcon.getAttribute('data-hover');
                });

                // Saat mouse keluar dari elemen (mouseleave)
                link.addEventListener('mouseleave', function () {
                    if (!navIcon.classList.contains('active')) {
                        navIcon.src = defaultImages[index]; // Ambil dari array
                        console.log(defaultImages[index])
                    }
                });

                // Saat klik

                link.addEventListener('click', function () {
                    navIcon.classList.toggle('active');
                    if (navIcon.classList.contains('active')) {
                        navIcon.src = navIcon.getAttribute('data-active');
                    } else {
                        navIcon.src = navIcon.getAttribute('data-hover');
                    }
                });


            }

        })


        document.querySelector('.logout').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah perilaku default link

            // Buat form secara dinamis
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/logout';

            // Tambahkan CSRF token jika menggunakan Laravel
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            if (csrfToken) {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_token';
                input.value = csrfToken;
                form.appendChild(input);
            }

            // Tambahkan form ke body dan submit
            document.body.appendChild(form);
            form.submit();
        });

        document.querySelector('.logout').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah perilaku default link

            // Buat form secara dinamis
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/logout';

            // Tambahkan CSRF token jika menggunakan Laravel
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            if (csrfToken) {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_token';
                input.value = csrfToken;
                form.appendChild(input);
            }

            // Tambahkan form ke body dan submit
            document.body.appendChild(form);
            form.submit();
        });
        document.addEventListener('DOMContentLoaded', () => {
            // Seleksi elemen berdasarkan class
            const notificationElement = document.querySelector('.link-notifications');

            // Tambahkan event listener untuk klik
            if (notificationElement) {
                notificationElement.addEventListener('click', () => {
                    // Arahkan ke URL yang diinginkan
                    window.location.href = '/dashboard/notifications';
                });
            } else {
                console.error('Element with class .link-notifications not found.');
            }
        });

    </script>

</body>
</html>

