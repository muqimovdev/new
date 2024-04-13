
@php
    $client = Session::get('client');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout page</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

          <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
</head>
<style>
body{
    background-image:radial-gradient(rgb(12, 12, 12), rgb(37, 37, 37) , rgb(55, 55, 55))
}



</style>
<body>

    <div class="mt-5 col-3 ">

        <a href="{{route('main.page')}}" class="icon"><img href="{{route('main.page')}}" src="{{asset('frontend/assets/img/icon/back1.png')}}" width="50px" alt=""></a>

    </div>
      <div class="container">
        <div class="py-5 text-center">

          <h2 style="color:rgb(255, 255, 255);">Checkout form</h2>

        </div>


        <div class="row">
          <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted" style="color: bl">Your cart</span>
              <span class="badge badge-secondary badge-pill"> Product Count:{{ count($carts) }}</span>
            </h4>
            <ul class="list-group mb-3">
                @foreach ($carts as $cart)

<li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">{{ $cart->name }}</h6>
                  <small class="text-muted"> count:{{ $cart->count }}</small>
                </div>
                <span class="text-muted">{{ ($cart->price - ($cart->price * ($cart->discount / 100))) }}</span>
              </li>
              @endforeach
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (UZS)</span>
                <strong>                        @php
                    $totalDiscount = 0;
                @endphp
               @foreach($carts as $cart)
              @php
               $discountAmount = ($cart->price - ( $cart->price * ($cart->discount / 100))) * $cart->count ;
              $totalDiscount += $discountAmount;
              @endphp
               @endforeach
  @php
  echo $totalDiscount;
  @endphp</strong>
              </li>
            </ul>

            {{-- <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
              </div>
            </form> --}}

          </div>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3" style="color: white">Billing address</h4>
            <form class="needs-validation" novalidate action="{{ route('add.order') }}" method="POST" >
                @csrf
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your First name"  required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Your Last name" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>
{{--  --}}

              <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email address">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Your Address" name="address" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

<div class="row">
                <div class="col-md-6 mb-3">
                  <label for="country">Country</label>
                  <select class="custom-select d-block w-100" id="country" name="country" required>
                    <option value="" disabled >Choose...</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Russian">Russian</option>
                    <option value="American">American</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="state">Region</label>
                  <select class="custom-select d-block w-100" id="state" name="state" required>
                    <option value="" disabled>Choose...</option>
                    <option value="Andijon">Andijon</option>
                    <option value="Namangan">Namangan</option>
                    <option value="Farg'ona">Farg'ona</option>
                    <option value="Toshkent">Toshkent</option>
                    <option value="Buxoro">Buxoro</option>
                    <option value="Xorazm">Xorazm</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="Your zip" name="zip" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>
              <hr class="mb-4">



              <h4 class="mb-3"style="color: white">Payment</h4>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" name="cardName" placeholder="Your card name" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" name="cardNumber" placeholder="Your card number" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" name="cardExpiration" placeholder="Your card expiration" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
              </div>

              <hr class="mb-4">
              @if (count($carts) != 0 )
              <button  class="btn btn-dark btn-lg btn-block" type="submit">Continue to checkout</button>
              @elseif(count($carts) == 0)
   <h2> Your cart is empty</h2>
              @elseif(count($carts) != 0)
              @endif

            </form>
          </div>
        </div>
      </div>
      <br><br><hr>





      <footer class="gray-bg footer-style-two footer-style-three pt-75">
        <div class="container">
            <div class="footer-top-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-logo">
                            <a href="{{ route('main.page') }}"><img src="img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-wrap pt-45 pb-20">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">COMPANY</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="shop.html">Store Locations</a></li>
                                    <li><a href="/catact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">STORE</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">Category</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="shop-sidebar.html">Women</a></li>
                                    <li><a href="shop-sidebar.html">Men</a></li>
                                    <li><a href="shop-sidebar.html">Baby</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">FOLLOW US</h4>
                            <div class="footer-text">
                                <p>Get Free Shipping on all your orders!</p>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">

<div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                            <p>&copy; 2024 <a href="{{ route('main.page') }}">Adara online shop</a>. All Rights Reserved | +998333733085</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pay-method-img">
                            <img src="img/images/payment_method_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<script>
             // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function () {
            'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
     })()
      </script>
</script>


    <!-- JS here -->
        <script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nav-tool.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
           {{-- Toastr --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

</body>

</html>
