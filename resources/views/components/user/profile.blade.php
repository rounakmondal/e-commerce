<section class="hero-wrap hero-wrap-2" style="background-image: url('user/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact Us <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Profile </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
<div class="container text-center mt-5">
    <div class="row text-center">


        <div class="card" style="width: 22rem; margin-left:auto; margin-right:auto;">
  
            <div class="card-body">
              @if(session()->has('useremail'))
              @php
            
              $userdata =  DB::table('userinfodatas')->where('email', session('useremail'))->first();
            
              @endphp
              <div>
                <h5 class="card-title">{{$userdata->name}}</h5>
            
              </div>
              <div>
                <h4>Address: {{$userdata->location}}</h4>
                <h4>Email: {{$userdata->email}}</h4>
                <h4>phone_number: {{$userdata->phone_number}}</h4>
            
              
              </div>
            @else
            <div class="reg">
              <h5 class="card-title">Profile Title</h5>
              </div>
             @endif
          
            
              <a  class="btn btn-primary"  data-toggle="modal" data-target="#profile">EDit Profile</a>
            </div>
          </div>
    </div>

</div>
  </section>


<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="text-center" id="exampleModalLabel" >Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action ='{{route('userinfodata')}}' method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" style="height:20px;" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or ph number" value={{$userdata->id}}>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" style="height:20px;" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or ph number" value={{$userdata->email}}>
              
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" style="height:20px;" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or ph number"value={{$userdata->name}}>
              
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">phone_number</label>
                <input type="text" class="form-control" style="height:20px;" name="phone_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or ph number"value={{$userdata->phone_number}}>
              
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">location</label>
                <input type="text" class="form-control" style="height:20px;" name="location" id="exampleInputPassword1" placeholder="enter your Password"value={{$userdata->location}}>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">password</label>
                <input type="password" class="form-control" style="height:20px;" name="password" id="exampleInputPassword1" placeholder="enter your Password"value={{$userdata->password}}>
              </div>
<div class="text-center">
              <button type="submit" class="btn btn-primary text-center">update your profile info</button>
            </div>
            </form>
      </div>
      
    </div>
  </div>
</div>

