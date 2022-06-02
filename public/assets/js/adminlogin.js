

$(document).ready(function() {
    // $('#admindata').submit(function(e) {
        $('#save_btn').on('click',function(e) {
     
        e.preventDefault;

        let _token = $('meta[name="csrf-token"]').attr('content');
        var email = $('#emailaddress').val();
        var password = $('#password').val();
        // console.log(email, password);
        // console.log(email, password);
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
                // alert('dad');
                if(res.success){
                //    var rr = document.getElementById("save_btn").innnerHTML='ranjan';
                //    toastr.success("{!!log in sucessuly!!}");
                
                    window.location.href = "http://127.0.0.1:8000/admin";
                }
                else{

                }
            


      
            }
          });
    });
});


