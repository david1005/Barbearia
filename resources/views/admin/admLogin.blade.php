<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    
    
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="{{ route('admin.login.do')}}">
                @csrf
					<span class="login100-form-title p-b-26">
						Bem-Vindo.
                    </span>
                    @if($errors->all())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                            
                        @endforeach

                    @endif

					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Você não tem uma conta?
						</span>

						<a class="txt2" href="#">
							Inscrever-se
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/popper.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/moment.min.js')}}"></script>
	<script src="{{ asset('js/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js')}}"></script>

</body>
</html>