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
            <a href="https://www.instagram.com/ihatemondayph/" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
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

        <!-- contact -->
        <div class="container" id="contact">
            <h1 class="text-center">CONTACT US</h1>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-phone"> Phone</i>
                        <h6>+ 01 234 567 88</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fa-solid fa-envelope"> Email</i>
                        <h6>iHateMondayPH@gmail.com</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fa-solid fa-location-dot"> Address</i>
                        <h6>1568 Raxabago St. Tondo, Manila</h6>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Name">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Email">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="number" class="form-control form-control" placeholder="Phone">
                </div>
               <div class="form-group" style="margin-top: 30px;">
                <textarea class="form-control" id=""rows="5" placeholder="Message"></textarea>
            </div>
            <div id="messagebtn" class="text-center"><button>Message</button></div>
            </div>
        </div>
        <!-- contact -->






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

</body>
</html>