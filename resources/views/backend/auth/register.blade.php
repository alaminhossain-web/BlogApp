<!doctype html>
<html lang="en" dir="ltr"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keywords" content="">

        <!-- TITLE -->
		<title>Register Page</title>

        @include('backend.includes.style')

    </head>

    
        <body class="ltr login-img">

        
            <!-- GLOBAL-LOADER -->
            <div id="global-loader">
                <img src="{{ asset('/') }}backend/assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>

            
                
			<!-- PAGE -->
			<div class="page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto text-center">
						<a href="index.html">
							<img src="{{ asset('/') }}logo.png" class="header-brand-img" alt="" style="height: 80px">
						</a>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form" action="{{  route('register') }}" method="post" >
                                    @csrf
									<span class="login100-form-title">
										Registration
									</span>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="name" placeholder="User name">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="mdi mdi-account" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="email" placeholder="Email">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="password" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
                                    <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
									<label class="custom-control custom-checkbox mt-4">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
									</label>
									<div class="container-login100-form-btn">
										<button type="submit" class="login100-form-btn btn-primary">
											Register
										</button>
									</div>
									<div class="text-center pt-3">
										<p class="text-dark mb-0">Already have account?<a href="{{ route('login') }}" class="text-primary ms-1">Sign In</a></p>
									</div>
								</form>
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center my-3">
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-google"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-facebook"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center">
										<i class="fa fa-twitter"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->

            
            @include('backend.includes.script')


    </body>


<!-- Mirrored from laravel8.spruko.com/noa/register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:13:11 GMT -->
</html>
