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
                        <li class="nav-item active">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link active" href="{{route('dashboard.scholarships')}}">
						        <span class="nav-icon nav-icon-applications">

    <img  src="/dashboard-template/assets/images/scholarship-hover.svg" alt="Icon" class=" bi bi-house-door navIcon"   data-hover="/dashboard-template/assets/images/scholarship-hover.svg"
          data-active="/dashboard-template/assets/images/scholarship-hover.svg">

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

			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">List of Scholarships</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>

							    </div><!--//col-->
							    <div class="col-auto">

								    <select class="form-select w-auto" >
										  <option selected value="option-1">All</option>
										  <option value="option-2">This week</option>
										  <option value="option-3">This month</option>
										  <option value="option-4">Last 3 months</option>

									</select>
							    </div>
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->


			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">SMA</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">S1</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">S2</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="applications-s3-tab" data-bs-toggle="tab" href="#application-s3" role="tab" aria-controls="orders-cancelled" aria-selected="false">S3</a>
				</nav>


				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-center">
										<thead>
											<tr>
												<th class="cell">No</th>
												<th class="cell">Image</th>
												<th class="cell">Title</th>
												<th class="cell">Deadline Date</th>
												<th class="cell">Category</th>
												<th class="cell">Status</th>
												<th class="cell">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="cell"><span class="mx-1">1</span></td>
												<td class="cell">
													<div class="text-center">
														<img src="https://ieltspresso.com/wp-content/uploads/2024/04/kaist2.jpg" class="rounded" style="width: 110px; height: 110px; object-fit:fill;" alt="...">
													</div>
												</td>
												<td class="cell">2025-01-07</td>
												<td class="cell">2025-01-23</td>
												<td class="cell"><span class="badge bg-info">SMA</span></td>
												<td class="cell">
													<span class="badge bg-primary">Open</span>
												</td>
												<td class="cell">
													<div class="d-flex flex-column justify-content-center align-items-center">
														<a href="#"
														   class="btn btn-sm btn-primary bg-secondary text-white mt-2"
														   style="width: 80px; transition: background-color 0.3s; background-color: #6c757d;"
														   onmouseover="this.style.backgroundColor='#5a6268'"
														   onmouseout="this.style.backgroundColor='#6c757d'"
														   onmousedown="this.style.backgroundColor='#343a40'"
														   onmouseup="this.style.backgroundColor='#5a6268'">
															View
														</a>

														<a href="#"
														   class="btn btn-sm btn-primary text-white mt-2"
														   style="width: 80px; background-color: rgb(21, 163, 98); transition: background-color 0.3s;"
														   onmouseover="this.style.backgroundColor='#198754'"
														   onmouseout="this.style.backgroundColor='rgb(21, 163, 98)'"
														   onmousedown="this.style.backgroundColor='#145c39'"
														   onmouseup="this.style.backgroundColor='#198754'">
															Apply
														</a>
													</div>
												</td>
											</tr>

										</tbody>
									</table>
						        </div><!--//table-responsive-->

						    </div><!--//app-card-body-->
						</div><!--//app-card-->
						<nav class="app-pagination">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							    </li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
								    <a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav><!--//app-pagination-->

			        </div><!--//tab-pane-->

			        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">

							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Order</th>
												<th class="cell">Product</th>
												<th class="cell">Customer</th>
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="cell">#15346</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>

											<tr>
												<td class="cell">#15344</td>
												<td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
												<td class="cell">Teresa Holland</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$123.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>

											<tr>
												<td class="cell">#15343</td>
												<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
												<td class="cell">Jayden Massey</td>
												<td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$199.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>


											<tr>
												<td class="cell">#15341</td>
												<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
												<td class="cell">Raymond Atkins</td>
												<td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$678.26</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>

										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->
						</div><!--//app-card-->
			        </div><!--//tab-pane-->

			        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Order</th>
												<th class="cell">Product</th>
												<th class="cell">Customer</th>
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="cell">#15345</td>
												<td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
												<td class="cell">Dylan Ambrose</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
												<td class="cell"><span class="badge bg-warning">Pending</span></td>
												<td class="cell">$96.20</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
			        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Order</th>
												<th class="cell">Product</th>
												<th class="cell">Customer</th>
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td class="cell">#15342</td>
												<td class="cell"><span class="truncate">Justo feugiat neque</span></td>
												<td class="cell">Reina Brooks</td>
												<td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
												<td class="cell"><span class="badge bg-danger">Cancelled</span></td>
												<td class="cell">$59.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>

										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

<!--	    <footer class="app-footer">-->
<!--		    <div class="container text-center py-3">-->
<!--		         &lt;!&ndash;/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */&ndash;&gt;-->
<!--            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>-->
<!--		       -->
<!--		    </div>-->
<!--	    </footer>&lt;!&ndash;//app-footer&ndash;&gt;-->

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
            if (index  !== 2) {
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

