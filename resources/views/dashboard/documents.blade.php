<!DOCTYPE html>
<html lang="en">
<head>
    <title>SCHOLARZONE</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="SCHOLARZONE">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="/portal-logo-ade.ico">

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
                            <form class="app-search-form" action="/dashboard/scholarships" method="GET">
                                <input type="text" placeholder="Search..." name="search" class="form-control search-input">
                                <button type="submit" class="btn search-btn btn-primary" value="Search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div><!--//app-search-box-->

                        <div class="app-utilities col-auto">
                            <div class="app-utility-item app-notifications-dropdown dropdown">
                                <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
                                        <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                    </svg>
                                </a><!--//dropdown-toggle-->

                                <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
                                    <div class="dropdown-menu-header p-3">
                                        <h5 class="dropdown-menu-title mb-0">Notifications</h5>
                                    </div><!--//dropdown-menu-title-->
                                    <div class="dropdown-menu-content">
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <img class="profile-image" src="/dashboard-template/assets/images/profiles/profile-1.png" alt="">
                                                </div><!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">Amy shared a file with you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                                                        <div class="meta"> 2 hrs ago</div>
                                                    </div>
                                                </div><!--//col-->
                                            </div><!--//row-->
                                            <a class="link-mask" href="notifications.html"></a>
                                        </div><!--//item-->
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="app-icon-holder">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                                                            <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                                        </svg>
                                                    </div>
                                                </div><!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">You have a new invoice. Proin venenatis interdum est.</div>
                                                        <div class="meta"> 1 day ago</div>
                                                    </div>
                                                </div><!--//col-->
                                            </div><!--//row-->
                                            <a class="link-mask" href="notifications.html"></a>
                                        </div><!--//item-->
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="app-icon-holder icon-holder-mono">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                                                        </svg>
                                                    </div>
                                                </div><!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">Your report is ready. Proin venenatis interdum est.</div>
                                                        <div class="meta"> 3 days ago</div>
                                                    </div>
                                                </div><!--//col-->
                                            </div><!--//row-->
                                            <a class="link-mask" href="notifications.html"></a>
                                        </div><!--//item-->
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <img class="profile-image" src="/dashboard-template/assets/images/profiles/profile-2.png" alt="">
                                                </div><!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">James sent you a new message.</div>
                                                        <div class="meta"> 7 days ago</div>
                                                    </div>
                                                </div><!--//col-->
                                            </div><!--//row-->
                                            <a class="link-mask" href="notifications.html"></a>
                                        </div><!--//item-->
                                    </div><!--//dropdown-menu-content-->

                                    <div class="dropdown-menu-footer p-2 text-center">
                                        <a href="notifications.html">View all</a>
                                    </div>

                                </div><!--//dropdown-menu-->
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
                                <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img class="rounded rounded-5" src="{{(auth()->user()->picture_url == "" || auth()->user()->picture_url == null) ? "https://i.pinimg.com/736x/09/21/fc/0921fc87aa989330b8d403014bf4f340.jpg" : "/storage/" . auth()->user()->picture_url }}" alt="user profile"></a>
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
                            <a class="nav-link active" href="{{route('dashboard.documents')}}">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/document-hover.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/document-hover.svg"
          data-active="/dashboard-template/assets/images/document-hover.svg">

						         </span>
                                <span class="nav-link-text">Documents</span>
                            </a><!--//nav-link-->


                        </li><!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="{{route('dashboard.help')}}">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/help.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/help-hover.svg"
          data-active="/dashboard-template/assets/images/help.svg">

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
			    <h1 class="app-page-title">Documents <span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="
Harap lengkapi formulir ini dengan benar untuk melanjutkan pendaftaran atau pengajuan beasiswa. Formulir ini adalah syarat wajib untuk mendaftar program beasiswa yang bekerja sama dengan platform kami.
"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
  <circle cx="8" cy="4.5" r="1"/>
</svg></span>
				</h1>

				<hr class="mb-4">
                <div class="row g-4 settings-section">
					<h3 class="section-title">Personal Information</h3>
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">

						    <div class="app-card-body">
							    <form class="settings-form" method="POST" action="{{route('dashboard.documents.personal')}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Full Name</label>
									    <input type="text" class="form-control" id="setting-input-1" name="full_name" placeholder="Name" value="{{$user->full_name ?? ""}}">
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">NIK</label>
									    <input name="nik" type="number" class="form-control" id="setting-input-2" placeholder="NIK" value="{{$user->nik ?? ""}}>
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Email Address</label>
									    <input name="email" type="email" class="form-control" id="setting-input-3" value="{{$user->email ?? ""}}">
									</div>
									<div class="mb-3">
										<label for="setting-input-4" class="form-label">Gender</label>
										<select id="setting-input-4" name="gender" class="form-select" aria-label="Default select example">
                                            <option value="1"
                                            @if($user->gender == 1)
                                                selected
                                            @endif
											>Male</option>
											<option value="2"
                                            @if($user->gender == 2)
                                                selected
                                            @endif
                                            >Female</option>
										</select>
									</div>
									<div class="mb-3">
										<label for="setting-input-5" class="form-label">Address</label>
										<textarea name="Address" type="text" class="form-control" id="setting-input-5" style="resize: none; overflow: hidden; height: 100px;" placeholder="Address">{{$user->address ?? ""}}</textarea>
									</div>

									<div class="mb-3">
										<label for="setting-input-6" class="form-label">Phone Number</label>
										<input name="phone_number" type="number" class="form-control" id="setting-input-6" value="{{$user->phone_number ?? ""}}" placeholder="+62">
									</div>

									<div class="mb-3">
										<label for="setting-input-7" class="form-label">Guardian's Name</label>
										<input name="guardian_name" type="text" class="form-control" id="setting-input-7" value="{{$user->guardian_name ?? ""}}" placeholder="Guardian's Name">
									</div>

									<div class="mb-3">
										<label for="setting-input-8" class="form-label">Parent's Occupation</label>
										<input name="parent_occupation" type="text" class="form-control" id="setting-input-8" value="{{$user->parent_occupation ?? ""}}" placeholder="Parent's Occupation">
									</div>


									<button type="submit" class="btn app-btn-primary" >Save Changes</button>
							    </form>
						    </div><!--//app-card-body-->

						</div><!--//app-card-->
	                </div>
                </div><!--//row-->

				<div class="row g-4 settings-section mt-4">
					<h3 class="section-title">Educational Background</h3>
					<div class="col-12 col-md-12">
						<div class="app-card app-card-settings shadow-sm p-4">

							<div class="app-card-body">
								<form class="settings-form" method="POST" action="{{route('dashboard.documents.education')}}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
									<div class="mb-3">
										<label for="setting-input-9" class="form-label">Current Level Of Eduaction</label>
										<select id="setting-input-9" name="education_level" class="form-select" aria-label="2">

											<option value="1"
                                            @if($user->education_level == 1)
                                                selected
                                            @endif
                                            >SMA</option>

											<option value="2"
                                                    @if($user->education_level == 2)
                                                        selected
                                                @endif
                                            >S1</option>

                                            <option value="3"
                                                    @if($user->education_level == 3)
                                                        selected
                                                @endif
                                            >S2</option>

											<option value="4"
                                                    @if($user->education_level == 4)
                                                        selected
                                                @endif
                                            >S3</option>
										</select>
									</div>

									<div class="mb-3">
										<label for="setting-input-10" class="form-label">School / University Name</label>
										<input id="setting-input-10" name="school_name" type="text" class="form-control" id="setting-input-1" value="{{$user->school_name ?? ""}}" placeholder="Universitas Ngawi" required>
									</div>

									<div class="mb-3">
										<label for="setting-input-11" class="form-label">Major / Study Program</label>
										<input id="setting-input-11" name="major" type="text" class="form-control" id="setting-input-1" placeholder="Bachelor's Degree" value="{{$user->major}}" required>
									</div>


									<div class="mb-3">
										<label for="setting-input-12" class="form-label">Year of Graduation</label>
										<input name="year_of_graduation" type="number" class="form-control" id="setting-input-12" value="{{$user->year_of_graduation}}" placeholder="2050" min="1990" max="2050">
									</div>

									<div class="mb-3">
										<label for="setting-input-13" class="form-label">Latest GPA or Report Card Grades</label>
										<input name="latest_gpa" type="number" class="form-control" id="setting-input-13" value="{{$user->latest_gpa}}" placeholder="0" min="0" max="50">
									</div>

									<div class="mb-3">
										<label for="setting-input-14" class="form-label">Student ID Card <span class="text-danger" style="font-size: 10px">(jpg, jpeg, png)</span></label>
										<input id="setting-input-14" class="form-control" type="file" name="picture_url" id="formFile">

                                        @if($user->student_id_card )
                                            <div
                                                id="viewIdCard"
                                                class="btn app-btn-primary mt-3">
                                            View Image
                                            </div>
                                        @endif

                                    </div>

                                    <!-- Modal for Viewing Image -->
                                    <div class="modal fade" id="viewImageModal" tabindex="-1" aria-labelledby="viewImageModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewImageModalLabel">Student Id Card</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="uploadedImage" src="/storage/{{$user->picture_url ?? ""}}" alt="Uploaded Image" class="img-fluid">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<button type="submit" class="btn app-btn-primary" >Save Changes</button>
								</form>
							</div><!--//app-card-body-->

						</div><!--//app-card-->
					</div>
				</div><!--//row-->

				<div class="row g-4 settings-section mt-4">
					<h3 class="section-title">Attachment of Supporting Documents</h3>
					<div class="col-12 col-md-12">
						<div class="app-card app-card-settings shadow-sm p-4">

							<div class="app-card-body">
								<form class="settings-form" method="POST" action="{{route('dashboard.documents.document')}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
									<div class="mb-3">
										<label for="setting-input-15" class="form-label">Kartu Keluarga <span class="text-danger" style="font-size: 10px">(jpg, jpeg, png)</span></label>
										<input class="form-control" type="file" id="setting-input-15" name="kartu_keluarga">

                                        @if($user->kartu_keluarga)
                                            <div
                                                id="viewKartuKeluarga"
                                                class="btn app-btn-primary mt-3">
                                                View Image
                                            </div>
                                        @endif

                                    </div>

                                    <!-- Modal for Viewing Image -->
                                    <div class="modal fade" id="viewKartuKeluargaModal" tabindex="-1" aria-labelledby="viewKartuKeluargaModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewKartuKeluargaModalLabel">Student Id Card</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="uploadedImage" src="/storage/{{$user->kartu_keluarga ?? ""}}" alt="Uploaded Image" class="img-fluid">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="mb-3">
										<label for="setting-input-16" class="form-label">Transkrip Nilai Terakhir / Raport Sekolah <span class="text-danger" style="font-size: 10px">(jpg, jpeg, png)</span></label>
										<input class="form-control" type="file" id="setting-input-16" name="transkrip_nilai_terakhir">

                                        @if($user->transkrip_nilai_terakhir)
                                            <div
                                                id="viewTNR"
                                                class="btn app-btn-primary mt-3">
                                                View Image
                                            </div>
                                        @endif

                                    </div>

                                    <!-- Modal for Viewing Image -->
                                    <div class="modal fade" id="viewTNRModal" tabindex="-1" aria-labelledby="viewTNRLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewTNRLabel">Student Id Card</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="uploadedImage" src="/storage/{{$user->transkrip_nilai_terakhir ?? ""}}" alt="Uploaded Image" class="img-fluid">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3">
										<label for="setting-input-17" class="form-label">Ijazah Terakhir <span class="text-danger" style="font-size: 10px">(jpg, jpeg, png)</span></label>
										<input class="form-control" type="file" id="setting-input-17" name="ijazah_terakhir">

                                        @if($user->ijazah_terakhir)
                                            <div
                                                id="viewIjazah"
                                                class="btn app-btn-primary mt-3">
                                                View Image
                                            </div>
                                        @endif

                                    </div>

                                    <!-- Modal for Viewing Image -->
                                    <div class="modal fade" id="viewIjazahModal" tabindex="-1" aria-labelledby="viewIjazahLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewIjazahLabel">Student Id Card</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="uploadedImage" src="/storage/{{$user->ijazah_terakhir ?? ""}}" alt="Uploaded Image" class="img-fluid">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3">
										<label for="setting-input-18" class="form-label">Portofolio / Resume <span class="text-danger" style="font-size: 10px">(jpg, jpeg, png)</span></label>
										<input class="form-control" type="file" id="setting-input-18" name="portofolio">

                                        @if($user->portofolio)
                                            <div
                                                id="viewPorto"
                                                class="btn app-btn-primary mt-3">
                                                View Image
                                            </div>
                                        @endif

                                    </div>

                                    <!-- Modal for Viewing Image -->
                                    <div class="modal fade" id="viewPortoModal" tabindex="-1" aria-labelledby="viewPortoLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewPortoLabel">Student Id Card</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img id="uploadedImage" src="/storage/{{$user->portofolio ?? ""}}" alt="Uploaded Image" class="img-fluid">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn app-btn-primary" >Save Changes</button>
								</form>
							</div><!--//app-card-body-->

						</div><!--//app-card-->
					</div>
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
            if (index  !== 3) {
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


        document.getElementById("viewIdCard")
            .addEventListener("click", (e) => {
                e.preventDefault();
                const viewImageModal = new bootstrap.Modal(document.getElementById('viewImageModal'));
                viewImageModal.show();

            })

        document.getElementById("viewKartuKeluarga")
            .addEventListener("click", (e) => {
                e.preventDefault();
                const viewImageModal = new bootstrap.Modal(document.getElementById('viewKartuKeluargaModal'));
                viewImageModal.show();

            })

        document.getElementById("viewTNR")
            .addEventListener("click", (e) => {
                e.preventDefault();
                const viewImageModal = new bootstrap.Modal(document.getElementById('viewTNRModal'));
                viewImageModal.show();

            })

        document.getElementById("viewIjazah")
            .addEventListener("click", (e) => {
                e.preventDefault();
                const viewImageModal = new bootstrap.Modal(document.getElementById('viewIjazahModal'));
                viewImageModal.show();

            })

        document.getElementById("viewPorto")
            .addEventListener("click", (e) => {
                e.preventDefault();
                const viewImageModal = new bootstrap.Modal(document.getElementById('viewPortoModal'));
                viewImageModal.show();

            })


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


    @include('sweetalert::alert')

</body>
</html>

