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



<!-- about -->
<div class="container" id="about">
    <h1>ABOUT US</h1>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="./image/abouts.png" alt="">
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
            <p>Founded on the belief that every item deserves a second chance, iHateMondayPH emerged from a vision to create 
            a space where people can explore, connect, and discover unique pieces with a rich history. Our journey began with 
            a commitment to reducing waste, promoting eco-friendly choices, and building a community that values the beauty of 
            pre-loved items.</p><br>

            <h2>VISION</h2><br>
            <p>To cultivate a sustainable and vibrant community where the joy of discovery meets responsible consumerism, 
            our vision at iHateMondayPH is to be the go-to destination for individuals seeking affordable, unique, 
            and environmentally conscious shopping experiences. We envision a world where every item has a second chance, 
            and our Thrift Shop becomes a symbol of sustainable living and community connection.</p>

            <h2>MISSION</h2><br>
            <p>Our Thrift Shop offers affordable fashion and home goods, promoting sustainability and reducing waste. 
            We create a welcoming space for community engagement, fostering connections and sharing stories. We support 
            local charities and social initiatives, using proceeds to make a positive impact. We celebrate diversity by 
            offering a wide range of products catering to different preferences, ensuring everyone feels 
            included and valued.</p>
        </div>
    </div>
</div>
<!-- about -->


<!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over $100</p>
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

</body>
</html>