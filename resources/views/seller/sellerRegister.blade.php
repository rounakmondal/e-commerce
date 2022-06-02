<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login user</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="icon" type="image/png" href="seller/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="seller/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="seller/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="seller/vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="seller/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="seller/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="seller/css/util.css">
	<link rel="stylesheet" type="text/css" href="seller/css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				

				<div class="login100-form ">
					<span class="login100-form-title">
						Member Registration...
					</span>
					<div class="wrap-input100 validate-input emailadd" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 full_name" type="text" name="phone" id="full_name" placeholder="Full Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input emailadd" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 " type="text" name="phone" id="emailaddress" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input emailadd" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 " type="text" name="phone" id="phone" placeholder="phone_number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input emailadd" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 " type="text" name="phone" id="location" placeholder="location">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input ph_number" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="phone" placeholder="shop_name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="loginbtn">
							Login
						</button>
						<button class="login100-form-btn" id="process">
							process
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="seller/images/img-01.png" alt="IMG">
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	
	
	<script src="seller/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="seller/vendor/bootstrap/js/popper.js"></script>
	<script src="seller/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="seller/vendor/select2/select2.min.js"></script>

	<script src="seller/vendor/tilt/tilt.jquery.min.js"></script>
	     {{-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> --}}
   
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="seller/js/main.js"></script>


<script type='text/javascript'>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {


    toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': true,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}
    // $('#admindata').submit(function(e) {
        $('#process').hide();
        $('#loginbtn').on('click',function(e) {
     
        e.preventDefault;
		var ph_number;
        // let _token = $('meta[name="csrf-token"]').attr('content');
		var full_name=$('#full_name').val();
        var email = $('#emailaddress').val();

		var ph_number=$('#phone').val();
        var location=$('#location').val();
		var password = $('#password').val();
        console.log(email, password,full_name,location,ph_number);
        // console.log(email, password);
     
		$.ajax({
       
            url:'{{route("selldata")}}',
            type:"POST",
            
            dataType:"json",
            data:{
            //  "_token": "{{ csrf_token() }}",
             full_name:full_name, 
			 email:email,
			  phone:ph_number,
			  location:location,
              password:password
            },
            success:function(res){

if(res.sus){
	toastr.success('sucessfully done....');
	setTimeout(function(){ 
		window.location.href = "http://127.0.0.1:8000/selllogin";
		
	 }, 2000);
}
else{
	toastr.info('not done....');
}

				// console.log(res);
           
         


      
            }
          });
    });
});


</script> 


	

</body>
</html>