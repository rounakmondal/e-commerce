<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login user</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
				<div class="login100-pic js-tilt" data-tilt>
					<img src="seller/images/img-01.png" alt="IMG">
				</div>

				<div class="login100-form ">
					<span class="login100-form-title">
						Member Login
					</span>
						
					<div class="container-login100-form-btn m-2">
						<p style="margin-top:-20px;">log in with....</p>
						<div class="d-flex">
						<button class="btn btn-primary p-2 m-2" onclick="ph_numberf()" >
						ph_Number
						</button>
						<button class="btn btn-primary  p-2 m-2" id="email_id" onclick="emailf()">
							 Email
						</button>
					</div>
					</div>

					<div class="wrap-input100 validate-input emailadd" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 " type="text" name="phone" id="emailaddress" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input ph_number" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="phone" placeholder="phone_number">
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
	function ph_numberf(){
var ph_number=document.querySelector('.ph_number');
var email=document.querySelector('.emailadd');
ph_number.classList.add("showinput");
email.value ="";
email.classList.remove("showinput");
email.classList.add('hideinput');
toastr.info('loging with ph number...');

}
function emailf(){
	var ph_number=document.querySelector('.ph_number');
	var email =document.querySelector('.emailadd');
	ph_number.classList.remove("showinput");
	ph_number.value ="";
	ph_number.classList.add('hideinput')
	email.classList.add("showinput");
	toastr.info('loging with email...');
	// email.classList.add('hideinput');
}
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
        let _token = $('meta[name="csrf-token"]').attr('content');
        var email = $('#emailaddress').val();

		var ph_number=$('#phone').val();
        
		var password = $('#password').val();
        // console.log(email, password);
        // console.log(email, password);
     
		$.ajax({
       
            url:'{{route("userlogindata")}}',
            type:"POST",
            
            dataType:"json",
            data:{
             "_token": "{{ csrf_token() }}",
              email:email,
			  phone:ph_number,
              password:password
            },
            success:function(res){
				console.log(res);
           
                if(res.success){
                    $('#save_btn').hide();
                    $('#process_btn').show();
                   
                toastr.success('logging in....');

				setTimeout(function(){

           window.location.href = "http://127.0.0.1:8000/selldashboard";

				}, 2000);
              
                }
                else if(res.error){
                    toastr.error('incorrect passowrd');

                }
                else if(res.emailnotfound){
                    toastr.info('Email is not found...')

                }
				else if(res.phone){
                    toastr.info('phone is not found...')

                }


      
            }
          });
    });
});


</script> 


	

</body>
</html>