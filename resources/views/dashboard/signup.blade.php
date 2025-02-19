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

<body class="app app-signup p-0 body-full">
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-3">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">
					<div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="/dashboard-template/assets/images/portal-logo-ade.svg" alt="logo" style="width: 100px; height: 100px"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>

					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" method="POST" action="{{ route('register')}}">
                            @csrf

                            @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <div class="email mb-3">
								<label class="sr-only" for="full_name">Your Name</label>
								<input id="full_name" name="full_name" type="text" class="form-control signup-name" placeholder="Full name" required="required"  value="{{ old('full_name') }}">
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="email">Your Email</label>
								<input id="email" name="email" type="email" class="form-control signup-email" placeholder="Email" value="{{ old('email') }}" required="required">
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="password">Password</label>
								<input id="password" name="password" type="password" class="form-control signup-password" placeholder="Create a password" required="required">
							</div>

							<div class="email mb-3">
								<label class="sr-only" for="phone_number">Your Phone Number</label>
								<input id="phone_number" name="phone_number" type="number"  class="form-control signup-name" placeholder="Phone number" value="{{ old('number') }}" required="required">

							</div>

							<div class="email mb-3">
								<label class="sr-only" for="address">Your Address</label>
								<textarea style="overflow:hidden; resize: none; height: 100px" name="address" class="form-control" id="exampleFormControlTextarea1" rows="10" cols="20" placeholder="Address">{{ old('address') }}</textarea>
							</div>

							<div class="email mb-3">
								<label class="sr-only" for="city">Your City</label>
								<input id="city" name="city" type="text" class="form-control signup-name" placeholder="City" value="{{ old('city') }}" required="required">
							</div>

							<div class="email mb-3">
								<label class="sr-only" for="institution_name">Your Education</label>
								<select name="education_level" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
									<option value="SMA">SMA</option>
									<option value="S1">S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</select>
							</div>

							<div class="email mb-3">
								<label class="sr-only" for="institution_name">Your Institution</label>
								<input id="institution_name" name="institution_name" type="text" class="form-control signup-name" placeholder="Institution name" value="{{ old('institution_name') }}" required="required">
							</div>

							<div class="email mb-3">
								<label class="sr-only" for="major">Your Major</label>
								<input id="signup-name" name="major" type="text" class="form-control signup-name" placeholder="Major" value="{{old('major')}}" required="required">
							</div>

							<div class="email mb-3">
								<label class="sr-only" for="year_of_entry"></label>
								<input id="year_of_entry" name="year_of_entry" type="number" min="1900" max="2100" class="form-control signup-name" placeholder="Year of entry" value="{{old('year_of_entry')}}" required="required">
							</div>


							<div class="text-center">
								<button type="submit" class="btn hover-rondo w-100 theme-btn mx-auto" style="background-color: #7B6ADA; color: white">Sign Up</button>
							</div>
						</form> <!--//auth-form-->


						<div class="auth-option text-center pt-2">Already have an account? <a class="text-link" href="{{route('login')}}" >Log in</a></div>
					</div><!--//auth-form-container-->



			    </div><!--//auth-body-->

<!--			    <footer class="app-auth-footer">-->
<!--				    <div class="container text-center py-3">-->
<!--				         &lt;!&ndash;/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */&ndash;&gt;-->
<!--			        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>-->

<!--				    </div>-->
<!--			    </footer>&lt;!&ndash;//app-auth-footer&ndash;&gt;-->
		    </div><!--//flex-column-->
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
<!--			    <div class="d-flex flex-column align-content-end h-100">-->
<!--				    <div class="h-100"></div>-->
<!--				    <div class="overlay-content p-3 p-lg-4 rounded">-->
<!--					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>-->
<!--					    <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>-->
<!--				    </div>-->
<!--				</div>-->
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->

    </div><!--//row-->

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

