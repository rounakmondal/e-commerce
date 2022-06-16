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
    @php
$sellerdata= DB::table('sellerdatas')->where('email',session('email'))->first();
    @endphp
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form">

					<span class="login100-form-title">
						Member Registration...
					</span>
                    <form action="sellerupdate" method="post">
                      @csrf
				
                     
        
                        <div class="form-group">
                          <label for="exampleInputEmail1">Seller Name</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="full_name" aria-describedby="emailHelp" placeholder={{$sellerdata->fname}}>
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="emailaddress" aria-describedby="emailHelp" placeholder={{$sellerdata->fname}}>
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Phone Number</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder={{$sellerdata->fname}}>
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Location</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="location" placeholder={{$sellerdata->fname}}>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder={{$sellerdata->fname}}>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
           

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