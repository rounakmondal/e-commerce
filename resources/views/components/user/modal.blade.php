
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="text-center" id="exampleModalLabel" >Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action ='{{route('userlogin')}}' method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" style="height:20px;" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or ph number">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" style="height:20px;" name="password" id="exampleInputPassword1" placeholder="enter your Password">
                </div>

                <button type="submit" class="btn btn-primary text-center">Submit</button>
              </form>
        </div>
        
      </div>
    </div>
  </div>
  {{-- register code...... --}}

  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="text-center" id="exampleModalLabel" >Register Yourself</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <form action='{{route('userdata')}}' enctype="multipart/form-data" method="POST">
            @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name....</label>
                  <input type="name" name="name" class="form-control" style="height:20px;" id="name"  placeholder="Enter name ..">
              
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address.....</label>
                  <input type="email" class="form-control" style="height:20px;" id="email"  name="email" placeholder="Enter email...">
              
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Number.....</label>
                  <input type="number" class="form-control" style="height:20px;" id="number"  name="phone_number" placeholder="Enter  ph number">
              
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address...</label>
                  <input type="address" class="form-control" style="height:20px;" id="address"  name="location" placeholder="Enter address">
              
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" style="height:20px;" id="password" name="password" placeholder="enter your Password">
                </div>
               
<div class="text-center">
                <button type="submit" class="btn btn-primary text-center" id="register_btn">Register</button>
            </div>
          </form> 
        </div>
        
      </div>
    </div>
  </div>




{{-- //profile --}}

