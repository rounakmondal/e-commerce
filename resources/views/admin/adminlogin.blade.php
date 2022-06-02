  <x-admin.header/>  
    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                          
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="assets/images/logo.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                    <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                                </div>

                        
                           

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary"  id="save_btn">log in  </button>
                                        <button class="btn btn-primary"  id="process_btn">processing  </button>
                                    </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © Ranjan $ team
        </footer>

        <!-- bundle -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
   
{{-- <script src='assets/js/adminlogin.js'></script> --}}

<script type='text/javascript'>

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
        $('#process_btn').hide();
        $('#save_btn').on('click',function(e) {
     
        e.preventDefault;

        let _token = $('meta[name="csrf-token"]').attr('content');
        var email = $('#emailaddress').val();
        var password = $('#password').val();
        // console.log(email, password);
        console.log(email, password);
        $.ajax({
       
            url:'{{route("adminlogindata")}}',
            type:"POST",
            
            dataType:"json",
            data:{
             "_token": "{{ csrf_token() }}",
              email:email,
              password:password
            },
            success:function(res){
           
                if(res.success){
                    $('#save_btn').hide();
                    $('#process_btn').show();
                   
                toastr.success('logging in....');
                setTimeout(function(){

                    window.location.href = "http://127.0.0.1:8000/admin";

                 }, 2000);
                }
                else if(res.error){
                    toastr.error('incorrect passowrd');

                }
                else if(res.emailnotfound){
                    toastr.info('Email is not found...')

                }


      
            }
          });
    });
});


</script> 
        
    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 18:07:17 GMT -->
</html>