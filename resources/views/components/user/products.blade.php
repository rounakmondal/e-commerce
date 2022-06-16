<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
  <div class="col-md-7 heading-section text-center ftco-animate">
      <span class="subheading">Our Delightful offerings</span>
    <h2>Tastefully Yours</h2>
  </div>
</div>

@php
$pdata=DB::table('productdatas')->get();

@endphp
<div class="row">
            @foreach($pdata as $key)
            <div class="col-md-3 d-flex">
                <div class="product ftco-animate">
                    <div class="img d-flex align-items-center justify-content-center" style='background:url({{"../images/".$key->product_oneimg}} );background-size:cover;'>

                    @if(session()->has('useremail'))

                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href={{"/addcart/".$key->id}} class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                        @else
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="btn btn-primary" data-toggle="modal" data-target="#exampleModal" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                        @endif

                    </div>
                    <div class="text text-center">
                        <span class="sale">Sale</span>
                        <span class="category">{{$key->category}}</span>
                        <h2>{{$key->product_name}}</h2>
                        <p class="mb-0">price::<span class="price">{{$key->product_price}}</span> </p>
                    </div>
                </div>
            </div>
            @endforeach
       
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="allproduct" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>