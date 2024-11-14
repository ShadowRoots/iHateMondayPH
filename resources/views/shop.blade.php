<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.homecss')
</head>
<body style="background-color: #EBE3D5; font-family: 'Tahoma', sans-serif">

    <div class="top-navbar">
    <!-- top navbar -->
        <div class="top-icons">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="other-links">
			
			@php
                $isLoggedIn = session()->get('isLoggedIn');
                if($isLoggedIn){
                    $name = session()->get('name');
                    $id = session()->get('id');
                    echo $name;
                    $route = "/profile?id=".$id;
                    $route2 = "/cart?id=".$id;
                }else{
                    echo "Please Sign Up or Register";
                    
                    $route = "/login";
                    $route2 = "/login";
                }
                
			@endphp
            <?php if(!$isLoggedIn):?>
                <button id="btn-login"><a href="/login">Login</a></button>
                <button id="btn-signup"><a href="/signup">Sign up</a></button>
            <?php endif; ?>
            <a href="{{ $route }}"><i class="fa-solid fa-user"></i></a>
            <a href="{{ $route2 }}"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </div>
    <!-- top navbar -->

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="nav-link" href="/"><img src="./image/logo.jpg" alt="" width="50px" style="border-radius: 50%;">&nbsp;iHateMondayPH</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/shop">Shop</a>
                  </li>
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #3A4D39;">
                      <li><a class="dropdown-item" href="#">T-Shirt</a></li>
                      <li><a class="dropdown-item" href="#">Hoodies</a></li>
                      <li><a class="dropdown-item" href="#">Pants</a></li>
                      <li><a class="dropdown-item" href="#">Soprts Shoes</a></li>
                      <li><a class="dropdown-item" href="#">Smart Watch</a></li>
                      <li><a class="dropdown-item" href="#">Glasses</a></li>
                    </ul>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="/aboutus">About Us</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                  </li>
                </ul>
               
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
                </form>
              </div>
            </div>
          </nav>
        <!-- navbar -->





        
    

    <!-- banner -->
    <div class="banner2">
        <div class="content2">
            <br><br>
            <h1>iHateMondayPH</h1>
            {{-- <p>Looking to shop? Please log in first.</p>
            <div id="bannerbtn2"><a href="/login"><button>LOG IN NOW</button></a></div> --}}
        </div>
    </div>
    <!-- banner -->


    <div id="snackbar"></div>
    <!-- product cards -->
    <div class="container" id="product-cards">
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Adidas Pants.jpeg" alt="">
                    <div class="card-body">
                        <h3>Adidas Pants</h3>
                        <p>Size: L <br> Dimensions: 33x38.5<br>Condition: 7/10<br>No issue</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
						<form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱400 <strike>₱500</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Adidas Pants">
						<input type="hidden" name="product_amount" value=400>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Kappa Track Pants.jpeg" alt="">
                    <div class="card-body">
                        <h3>Kappa Pants</h3>
                        <p>Size: M <br> Dimensions: 26x42<br>Condition: 9/10<br>No issue</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
						<form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱1,200 <strike>₱1,500</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Kappa Track Pants">
						<input type="hidden" name="product_amount" value=1200>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/NIKE Track Pants.jpeg" alt="">
                    <div class="card-body">
                        <h3>NIKE Pants</h3>
                        <p>Size: M <br> Dimensions: 24x38<br>Condition: 9/10<br>No issue</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱800 <strike>₱1,000</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="NIKE Track Pants">
						<input type="hidden" name="product_amount" value=800>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Uniqlo Parachute Pants.jpeg" alt="">
                    <div class="card-body">
                        <h3>Uniqlo Pants</h3>
                        <p>Size: L <br> Dimensions: 32x40.5<br>Condition: 8/10<br>Small stain near pocket</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱800 <strike>₱1,000</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Uniqlo Parachute Pants">
						<input type="hidden" name="product_amount" value=800>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Y2K Nike Parachute Pants.jpeg" alt="">
                    <div class="card-body">
                        <h3>Y2K Nike Pants</h3>
                        <p>Size: M <br> Dimensions: 34x40<br>Condition: 6/10<br>Need wash</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱900 <strike>₱1,300</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Y2K Nike Parachute Pants">
						<input type="hidden" name="product_amount" value=900>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Kaepa Longsleeve.jpeg" alt="">
                    <div class="card-body">
                        <h3>Kaepa Longsleeve</h3>
                        <p>Size: L-XL <br> Dimensions: 23.5x28<br>Condition: 9/10<br>No issue</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱500 <strike>₱700</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Kaepa Longsleeve">
						<input type="hidden" name="product_amount" value=500>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>

            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Kenzo Hoodie.jpeg" alt="">
                    <div class="card-body">
                        <h3>Kenzo Hoodie</h3>
                        <p>Size: S(on tag) <br> Dimensions: 21x29<br>Condition: 10/10<br>Good as new</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱1,200 <strike>₱1,400</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Kenzo Hoodie">
						<input type="hidden" name="product_amount" value=1200>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Vintage Fendi Windbreaker.jpeg" alt="">
                    <div class="card-body">
                        <h3>Vintage Fendi</h3>
                        <p>Size: XL-XXL <br> Dimensions: 26x30<br>Condition: 9/10<br>No issue</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱3,000 <strike>₱5,000</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Vintage Fendi Windbreaker">
						<input type="hidden" name="product_amount" value=3000>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/NIKE Techfleece two tone Hoodie.jpeg" alt="">
                    <div class="card-body">
                        <h3>NIKE Techfleece</h3>
                        <p>Size: XXL <br> Dimensions: 26.5x29<br>Condition: 10/10<br>Bought in dubai. Not thrifted</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱4,000 <strike>₱8,000</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="NIKE Techfleece two tone Hoodie">
						<input type="hidden" name="product_amount" value=4000>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Vintage ADIDAS Tee.jpeg" alt="">
                    <div class="card-body">
                        <h3>Vintage Tee</h3>
                        <p>Size: L <br> Dimensions: 22x29<br>Condition: 8/10<br>Crack Print</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱500 <strike>₱800</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Vintage ADIDAS Tee">
						<input type="hidden" name="product_amount" value=500>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Levi Jorts.jpeg" alt="">
                    <div class="card-body">
                        <h3>Levi Jorts</h3>
                        <p>Size: 36 on tag <br> Dimensions: 36x20.5<br>Condition: 7/10<br>washable stains</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱450 <strike>₱560</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Levi Jorts">
						<input type="hidden" name="product_amount" value=450>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/shopimg/IntegImgs/Wrangler Cargo Jorts.jpeg" alt="">
                    <div class="card-body">
                        <h3>Cargo Jorts</h3>
                        <p>Size: 38<br> Dimensions: 38x20.5<br>Condition: 9/10<br>No issue</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <form method="post" action="{{ route('addtocart') }}">
						@csrf
                        <h5>₱500 <strike>₱660</strike>
                        <button type="submit" class="float-right btn btn-link"><span><i class="fa-solid fa-cart-shopping"></i></span></button></a></h5>
						<input type="hidden" name="product_name" value="Wrangler Cargo Jorts">
						<input type="hidden" name="product_amount" value=450>
						@php
						
						try {
							echo "<input type='hidden' name='user_id' value='$id'>";
						} catch (Exception $e){
							echo "<input type='hidden' name='user_id' value=0>";
						}
						
						@endphp
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product cards -->















   

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
    <hr>
</div>
<div class="container" id="product">
    <h3 style="font-weight: bold;">PRODUCT.</h3>
    <p>Thrift clothing products, epitomizing the essence of sustainable fashion, offer a distinctive and eco-friendly 
        alternative to mainstream retail. These pre-loved garments, curated from various eras and styles, not only 
        showcase individuality but also contribute to a circular economy by reducing textile waste. Thrift shopping 
        for clothing is a treasure hunt, where vintage gems coexist with contemporary finds at affordable prices. 
        Choosing thrifted apparel allows individuals to embrace a unique sense of style while minimizing their 
        environmental footprint. Beyond the joy of discovering hidden fashion gems, opting for thrift clothing 
        is a conscious step towards a more sustainable and ethical approach to personal style, proving that great 
        fashion can be both affordable and environmentally responsible.</p>

    <hr>
</div>
    <!-- product -->


<!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over ₱100</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                <p>World wide</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Big Choice</h5>
                <p>Of product</p>
            </div>
        </div>
    </div>
<!-- offer -->






<!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-content">
                <h3>iHateMondayPH</h3>
                <p>Discover unbeatable deals and unique treasures at our Thrift Shop! Our advertisement invites you to explore a world of 
                    affordable fashion, home goods, and hidden gems.<br><br>Visit us today for a shopping experience that combines affordability 
                    with eco-consciousness, turning secondhand finds into first-class style.</p>
                <p>
                    Tondo, Manila <br>
                    Dubai <br>
                    Santa Cruz, Manila <br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+ 01 234 567 88</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>iHateMondayPH@gmail.com</strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/aboutus">About</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>We offer services for our loyal customers!</p>
                <ul>
                    <li>Fast Delivery</li>
                    <li>Item-Pick up</li>
                    <li>Protective Packaging</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Network</h4>
                <p>As of now, We only have our instagram page. Click the instagram icon & support us as we expand our shop
                    and wait for more rare items!</p>
                <div class="socail-links mt-3">
                    <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="https://www.instagram.com/ihatemondayph/" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- footer -->

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    var msg = "{{ Session::get('alert') }}";
    var exist = "{{ Session::has('alert') }}"
    
    if(exist){
        var x = document.getElementById("snackbar");
        x.className = "show";
        x.innerHTML = msg;
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    
</script>
</body>
</html>