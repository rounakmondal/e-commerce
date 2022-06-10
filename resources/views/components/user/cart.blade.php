<section class="hero-wrap hero-wrap-2" style="background-image: url('user/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">My Cart</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
      <div class="container">
          <div class="row">
              <div class="table-wrap">
                      <table class="table">
                        <thead class="thead-primary">
                          <tr>
                              <th>&nbsp;</th>
                              <th>&nbsp;</th>
                              <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>total</th>
                            <th>&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @php
                   
       
                   $cdata = DB::table('productdatas')->join('carts', 'productdatas.id', '=', 'carts.product_id')->where('carts.email',session('useremail'))->get();
          
                  //  $qdata=DB::table('carts')->where('product_id',$cdata[0]->id)->count();
                  //  dd($qdata);
                         @endphp
                              @foreach($cdata as $key)
                        


                          <tr class="alert" role="alert">
                              <td>
                                  <label class="checkbox-wrap checkbox-primary">
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                      </label>
                              </td>
                              <td>
                                  <div class="img" style='background:url({{"../images/".$key->product_oneimg}} );background-size:cover;'></div>
                              </td>
                            <td>
                                <div class="email">
                                    <span>{{$key->product_name}}</span>
                                    <span>{{$key->category}}</span>
                                </div>
                            </td>
                            <td>{{$key->product_price}}</td>
                            <td class="quantity">
                              <div class="input-group">
                               <input type="text" name="quantity" class="quantity form-control input-number" value="45" min="1" max="100" disabled>
                            </div>
                        </td>
                        <td>$89.98</td>
                            <td>
                              <a href="removecart/{{$key->id}}">
                                <button type="button" class="btn btn-danger">
                          remove from cart

                              {{-- <span aria-hidden="true"><i class="fa fa-close"></i></span> --}}
                            </button>
                          </a>
                          </td>
                          </tr>
                     @endforeach
                          
                        </tbody>
                      </table>
                  </div>
          </div>
          <div class="row justify-content-end">
              <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>Cart Totals</h3>
                      <p class="d-flex">
                          <span>Subtotal</span>
                          <span>$20.60</span>
                      </p>
                      <p class="d-flex">
                          <span>Delivery</span>
                          <span>$0.00</span>
                      </p>
                      <p class="d-flex">
                          <span>Discount</span>
                          <span>$3.00</span>
                      </p>
                      <hr>
                      <p class="d-flex total-price">
                          <span>Total</span>
                          <span>$17.60</span>
                      </p>
                  </div>
                  <p class="text-center"><a href="checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
              </div>
          </div>
      </div>
  </section>