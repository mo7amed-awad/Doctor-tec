<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sign In</title>
	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/login/css/fontAssume.css')}}" />
	<!-- Customized Bootstrap Stylesheet -->
	<link href="{{asset('assets/login/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
.alerting {
			font-family: 'Rubik', sans-serif !important;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			z-index: 9999;
			width: 308px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			font-size: 20px;
			font-weight: 500;
			background-color: #06A3DA;
			color: white !important;
			padding: 10px;
			border-radius: 5px;
			text-align: center;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}

		.close-btn {
			cursor: pointer;
			font-size: 24px;
			color: white;
			margin-left: 10px;
		}
	</style>
</head>

<body>

	@if ($errors->any())
	<div class="alert alert-danger">
		<h3>Error Occured</h3>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif


	@if(session()->has('status'))
	<div class="ui-alert ui-alert--success alerting" id="alert-box">
		<div class="fa-solid fa-circle-info"></div>
		<div class="ui-alert-inner">
			<h3 style="color: white;">{{ session('status') }}</h3>
		</div>
		<i class="fa-regular fa-circle-xmark close-btn" id="btn"></i>
	</div>
	@endif


	<div class="container">
		<div class="screen">
			<div class="screen__content">


				<!-- Start Select  -->
				<div class="form-group d-flex align-items-center justify-content-center mt-4 ms-3 me-3 text-center" dir="rtl">
					<select name="name" id="cboOptions" onchange="showDiv('div',this)" class="form-control w-75 text-center">
						<option value="0">تسجيل دخول </option>
						<option value="1">تسجيل دخول (مريض)</option>
						<option value="2">تسجيل دخول (طبيب)</option>
						<option value="3">تسجيل دخول (صيدلى)</option>
					</select>
				</div>
				<!-- End Select -->

				<!--Start Mian Header Div-->
				<div class="login" id="div0" style="display: block;">
					<h2 style="font-size: 28px;" class="title">مرحباً بك فى دكتورتك</h2>
				</div>
				<!--End Mian Header Div-->
				<!-- -----------------------------Login------------------------------------- -->

				<!-- Start Form User  -->
				<form action="{{route('login.user')}}" method="POST" class="login" id="div1" style="display: none;">
					@csrf
					<h2>الدخول كمريض</h2>

					<div class="login__field">
						<i class="login__icon fas fa-envelope"></i>
						<input type="email" name="email" class="login__input" placeholder="البريد الالكتروني">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password" class="login__input" id="userpass" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye1"></i>
					</div>
					<button class="button login__submit">
						<span class="button__text">تسجيل الدخول</span>
					</button>
				</form>
				<!-- End Form User  -->

				<!-- Start Form Doctor -->

				<form action="{{route('login.doctor')}}" method="POST" class="login" id="div2" style="display: none;">
					@csrf
					<h2> الدخول كطبيب</h2>
					<div class="login__field">
						<i class="login__icon fas fa-envelope"></i>
						<input type="email" name="email" class="login__input" placeholder="البريد الالكتروني">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password" class="login__input" id="userpass2" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye2"></i>
					</div>
					<button type="submit" class="button login__submit">
						<span class="button__text"> تسجيل الدخول</span>
					</button>
				</form>
				<!-- End Form Doctor -->

				<!-- Strat Form Pharacist -->
				<form action="{{route('login.Pharmacist')}}" method="POST" class="login" id="div3" style="display: none;">
					@csrf
					<h2>الدخول كصيدلي</h2>
					<div class="login__field">
						<i class="login__icon fas fa-envelope"></i>
						<input type="email" name="email" class="login__input" placeholder="البريد الالكتروني">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" name="password" class="login__input" id="userpass2" placeholder="كلمة المرور ">
						<i class="fa-regular fa-eye show_pass" id="eye2"></i>
					</div>
					<button type="submit" class="button login__submit">
						<span class="button__text"> تسجيل الدخول</span>
					</button>
				</form>

				<!-- End Form Pharacist -->

				<div class="social-login">
				</div>
			</div>
			<!-- Start Backeground -->
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>
			<!-- End Backeground -->
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

	<script src="{{asset('assets/login/js/script.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- Alert -->
	
<script>
		document.addEventListener('DOMContentLoaded', function() {
			const alertBox = document.getElementById('alert-box');
			const closeBtn = document.getElementById('btn');

			if (alertBox) {
				setTimeout(function() {
					alertBox.style.display = 'none';
				}, 5000);
			}

			if (closeBtn) {
				closeBtn.addEventListener('click', function() {
					if (alertBox) {
						alertBox.style.display = 'none';
					}
				});
			}
		});
	</script>
</body>

</html>