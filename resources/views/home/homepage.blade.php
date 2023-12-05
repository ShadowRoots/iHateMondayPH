<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.homecss')
</head>
<body style="background-color: #EBE3D5; font-family: 'Tahoma', sans-serif">

    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="other-links">
            <button id="btn-login"><a href="/login">Login</a></button>
            <button id="btn-signup"><a href="/signup">Sign up</a></button>

            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </div>
    <!-- top navbar -->

    <div class="home-section">
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
                      <li><a class="dropdown-item" href="#">Sports Shoes</a></li>
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





        <!-- home content -->
        <section class="home">
            <div class="content overlay">
                <h3>BIGGEST SALE!
                    <br> <span>Up to 50% OFF</span>
                </h3>
                <p>Discover unbeatable deals and unique treasures at our Thrift Shop!</p>
                <a href="/shop">
                    <button id="shopnow">SHOP NOW</button>
                </a>
            </div>
        </section>
        <!-- home content -->
    </div>

    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">
            <div class="col-md-4 py-2 py-md-0">
                <div class="card">
                    <img src="./image/thr.jpg" alt="">
                    <div class="card" style=" background-color: #EBE3D5;">
                        <h5 class="card-title"><br>Vintage Vibes</h5>
                        <p style="display: inline-block; margin-left: 1em;">Step into a world of timeless elegance and nostalgia with vintage Shops vibes. 
                            <br></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2 py-md-0">
                <div class="card">
                    <img src="./image/second.jpg" alt="">
                    <div class="card" style=" background-color: #EBE3D5;">
                        <h5 class="card-title"><br>Rare Items</h5>
                        <p style="display: inline-block; margin-left: 1em">Each piece tells a story of a bygone era, weaving together threads of history, style, and individuality.<br></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2 py-md-0">
                <div class="card">
                    <img src="./image/pants.jpg" alt="">
                    <div class="card" style=" background-color: #EBE3D5;">
                        <h5 class="card-title"><br>Affordable Cops</h5>
                        <p style="display: inline-block; margin-left: 1em">A journey of style without breaking the bank with our collection of affordable Shops.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top cards -->
    

    <!-- banner -->
    <div class="banner">
        <div class="content">
            <h1>GET UP TO 50% OFF</h1>
            <p>We invite you to explore a world of affordable fashion, home goods, and hidden gems.</p>
            <div id="bannerbtn"><a href="/shop"><button>SHOP NOW</button></a></div>
        </div>
    </div>
    <!-- banner -->

    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center">PRODUCT</h1>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p13.png" alt="">
                    <div class="card-body">
                        <h3>Men T-Shirt</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>₱250 <strike>₱500</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p14.png" alt="">
                    <div class="card-body">
                        <h3>Purple Heel</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>₱200 <strike>₱300</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p15.png" alt="">
                    <div class="card-body">
                        <h3>Men Shoes</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>₱500 <strike>₱800</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p16.png" alt="">
                    <div class="card-body">
                        <h3>Men Jacket</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>₱300 <strike>₱400</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p17.png" alt="">
                    <div class="card-body">
                        <h3>Blue T-Shirt</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>₱80 <strike>₱100</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p18.png" alt="">
                    <div class="card-body">
                        <h3>Girls Sandal</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>₱190 <strike>₱300</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p19.png" alt="">
                    <div class="card-body">
                        <h3>Men Jacket</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>₱180 <strike>₱300</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p20.png" alt="">
                    <div class="card-body">
                        <h3>Men T-SHirt</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>₱100 <strike>₱199</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>
        <a href="/shop" id="viewmorebtn">VIEW MORE</a>
    </div>
    <!-- product cards -->

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
    <hr>
</div>
<div class="container">
    <h3 style="font-weight: bold;">PRODUCT.</h3>
    <p>Our eclectic collection tells stories of days gone by, offering budget-friendly options for the fashion-savvy explorer. Embrace the thrill of the hunt and the joy of sustainable style in our welcoming space where every item has a history and every purchase is a chance to give pre-loved pieces a new chapter. Join us in redefining fashion as an ever-evolving, eco-conscious adventure. Welcome to the charm of our thrift shop—where every piece has a story to tell.</p>

    <hr>
</div>
    <!-- product -->


<!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over ₱500</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                <p>Nationwide</p>
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
                <p>Discover unbeatable deals and unique treasures at our Thrift Shop! Our advertisement invites you to explore a world of affordable fashion, home goods, and hidden gems.
                    <br><br>Visit us today for a shopping experience that combines affordability with eco-consciousness, turning secondhand finds into first-class style.</p>
                <p>CONTACT
                    <br>1640 Angono, Kape Hingahan <br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+ 01 234 567 88 </strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>info@gmail.com </strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/aboutus">About</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, rem!</p>
                <ul>
                    <li><a href="#">Smart phone</a></li>
                    <li><a href="#">Smart watch</a></li>
                    <li><a href="#">Airpods</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Network</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ad?</p>
                <div class="socail-links mt-3">
                    <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
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

</body>
</html>