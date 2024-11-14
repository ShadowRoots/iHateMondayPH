<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.homecss')
	
	<script>
		var msg = "{{ Session::get('alert') }}";
		var exist = "{{ Session::has('alert') }}";
		
		if(exist){
			alert(msg);
		}
		
	</script>
	
	@php
	$user_id = $_GET['user_id'];
	$transact_id = $_GET['id'];
	$item = $_GET['item'];
	$amount = $_GET['amount'];
	
	$userdetails = DB::table('users')->where('id', '=', $user_id)->get();
	$usertransactions = DB::table('transactions')->where('id', '=', $transact_id)->get();
	
	@endphp
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.vertical-nav {
	min-width: 17rem;
	width: 17rem;
	height: 100vh;
	position: fixed;
	top: 0;
	left: 0;
	box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
	transition: all 0.4s;
	}
	
	.bgc {
		background-color: #EBE3D5;
	}
	
	img{
	padding-right:10px ;
	}
	
	.page-content {
	width: calc(100% - 17rem);
	margin-left: 17rem;
	transition: all 0.4s;
	}
	
	/* for toggle behavior */
	
	#sidebar.active {
	margin-left: -17rem;
	}
	
	#content.active {
	width: 100%;
	margin: 0;
	}
	
	@media (max-width: 768px) {
	#sidebar {
	margin-left: -17rem;
	}
	#sidebar.active {
	margin-left: 0;
	}
	#content {
	width: 100%;
	margin: 0;
	}
	#content.active {
	margin-left: 17rem;
	width: calc(100% - 17rem);
	}
	}
	
	body {
	background: #5F6F52;
	background: -webkit-linear-gradient(to right, #4F6F52, #739072, #5F6F52);
	background: linear-gradient(to right, #4F6F52, #739072, #5F6F52);
	min-height: 100vh;
	overflow-x: hidden;
	font-family: 'Tahoma', sans-serif;
	}
	
	
	.text-uppercase {
	letter-spacing: 0.1em;
	}
	
	.text-gray {
	color: #aaa;
	}
	
	.form-control:focus {
	box-shadow: none;
	border-color: #5F6F52;
	}
	
	.profile-button {
	background: #5F6F52;
	box-shadow: none;
	border: none
	}
	
	.profile-button:hover {
	background: #4F6F52
	}
	
	.profile-button:focus {
	background: #4F6F52;
	box-shadow: none
	}
	
	.profile-button:active {
	background: #5F6F52;
	box-shadow: none
	}
	
	.back:hover {
	color: #5F6F52;
	cursor: pointer
	}
	
	.labels {
	font-size: 11px
	}
	
	button{
	width: 200px;
	}
	
	#display{
		width: 200px;
	}
	

</style>	
</head>
{{-- @foreach($userdetails as $user)

Name: {{ $user->name }}
<br>
Email: {{ $user->email }}

@endforeach --}}


@php
$isLoggedIn = session()->get('isLoggedIn');
if($isLoggedIn){
	$name = session()->get('name');
	$id = session()->get('id');
	$email = session()->get('email');
	// echo $name;
	$route = "/profile?id=".$id;
	$route2 = "/cart?id=".$id;
	$route3 = "/shop?id=".$id;
}else{
	// echo "Please Sign Up or Register";
	
	$route = "/login";
	$route2 = "/login";
}

@endphp
<?php if(!$isLoggedIn):?>
<button id="btn-login"><a href="/login">Login</a></button>
<button id="btn-signup"><a href="/signup">Sign up</a></button>
<?php endif; ?>
<body>
	
	
<div class="vertical-nav bgc" id="sidebar">
        <div class="py-4 px-3 mb-4 bgc">
			<div class="media d-flex bgc align-items-center"><img src="/image/profile.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
				<div class="media-body">
				<h4 class="m-0" id="nameProfile">Jason Doe</h4>
				<p class="font-weight-light text-muted mb-0">&nbsp;User</p>
				</div>
			</div>
        </div>
          
        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
          
		<ul class="nav flex-column bgc mb-0">
			<li class="nav-item">
				<a href="/" class="nav-link text-dark">
				  <i class="fa fa-home mr-3 text-primary fa-fw"></i>
				  Home
				</a>
			  </li>
			<li class="nav-item">
				<a href="{{ $route }}" class="nav-link text-dark">
						<i class="fa fa-users mr-3 text-primary fa-fw"></i>
						Profile
					</a>
			</li>
			<li class="nav-item">
				<a href="{{$route2}}" class="nav-link text-dark bg-light">
				  <i class="fa fa-cart-shopping mr-3 text-primary fa-fw"></i>
				  Cart
				</a>
			</li>
			<li class="nav-item">
				<a href="/logout" onclick="return confirm('Do you want to log out?')"  class="nav-link text-dark" id="logout-link">
						<i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>
						Logout
				</a>
			</li>
		</ul>
    </div> 

          

	<div class="page-content p-4" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light rounded-pill shadow-sm px-4 mb-4"><i
		class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Navigation</small></button>
		<br>
		<button type = "button" class = "btn btn-dark" id="profile-button">Profile</button>
		<button type = "button" class = "btn btn-dark" id="cart">Cart</button>
		<div class="container rounded bgc mt-3 mb-2">
			<div class="row">
				<div class="col-md-4 border-right">
					<div class="d-flex flex-column align-items-center text-center p-3 py-5">
					
						@if($item == "Adidas Pants")
							<h3>Adidas Pants</h3>
							<img src="./image/shopimg/IntegImgs/Adidas Pants.jpeg" alt="" id="display">
						@elseif($item == "Kappa Pants")
							<h3>Kappa Pants</h3>
							<img src="./image/shopimg/IntegImgs/Kappa Track Pants.jpeg" alt="" id="display">
						@elseif($item == "Nike Pants")
							<h3>Nike Pants</h3>
							<img src="./image/shopimg/IntegImgs/NIKE Track Pants.jpeg" alt="" id="display">
						@elseif($item == "Uniqlo Parachute Pants")
							<h3>Uniqlo Parachute Pants</h3>
							<img src="./image/shopimg/IntegImgs/Uniqlo Parachute Pants.jpeg" alt="" id="display">
						@elseif($item == "Y2K Nike Parachute Pants")
							<h3>Y2K Nike Parachute Pants</h3>
							<img src="./image/shopimg/IntegImgs/Y2K Nike Parachute Pants.jpeg" alt="" id="display">
						@elseif($item == "Kaepa Longsleeves")
							<h3>Uniqlo Parachute Pants</h3>
							<img src="./image/shopimg/IntegImgs/Kaepa Longsleeve.jpeg" alt="" id="display">
						@elseif($item == "Kenzo Hoodie")
							<h3>Kenzo Hoodie</h3>
							<img src="./image/shopimg/IntegImgs/Kenzo Hoodie.jpeg" alt="" id="display">
						@elseif($item == "Vintage Fendi Windbreaker")
							<h3>Vintage Fendi Windbreaker</h3>
							<img src="./image/shopimg/IntegImgs/Vintage Fendi Windbreaker.jpeg" alt="" id="display">
						@elseif($item == "NIKE Techfleecetwo tone Hoodie")
							<h3>NIKE Techfleecetwo tone Hoodie</h3>
							<img src="./image/shopimg/IntegImgs/NIKE Techfleece two tone Hoodie.jpeg" alt="" id="display">
						@elseif($item == "Vintage ADIDAS Tee")
							<h3>Vintage ADIDAS Tee</h3>
							<img src="./image/shopimg/IntegImgs/Vintage ADIDAS Tee.jpeg" alt="" id="display">
						@elseif($item == "Levi Jorts")
							<h3>Levi Jorts</h3>
							<img src="./image/shopimg/IntegImgs/Levi Jorts.jpeg" alt="" id="display">
						@elseif($item == "Wrangler Cargo Jorts")
							<h3>Wrangler Cargo Jorts</h3>
							<img src="./image/shopimg/IntegImgs/Wrangler Cargo Jorts.jpeg" alt="" id="display">
						@endif
						
					</div>
				</div>
				<div class="col-md-6 border-right">
					<div class="p-3 py-5">
						<form method="POST" action="{{ route('item.checkout') }}">
						@csrf
							<input type="hidden" name="user_id" value="{{ $user_id }}">
							<input type="hidden" name="id" value="{{ $transact_id }}">
							<input type="hidden" name="amount" value="{{ $amount }}">
							<input type="hidden" name="item" value="{{ $item }}">

							<div class="form-group">
								<input type="text" value="{{ $item }}" class="form-control" readonly><br>
							</div>

							<select name="mode" class="form-control">
								<option>GCash</option>
								<option>BDO Transfer</option>
							</select><br>
							
							<div class="form-group">
								<input type="text" name="account" id="account" class="form-control" placeholder="Account Number" required>
							</div><br>
							<div class="form-group">
								<input type="text" name="contact" id="contact" class="form-control" placeholder="Contact Number" required>
							</div><br>
							<div class="form-group">
								<input type="text" name="address" id="address" class="form-control" placeholder="Address to Deliver" required>
							</div><br>
							<button type="submit" class="btn btn-primary profile-button">Check Out</button>
							
						</form>
					
				</div>
			</div>
			
		</div>
	</div>
</div>

<script>
    var profileButton = document.getElementById("profile-button");
    var cart = document.getElementById("cart");

    profileButton.addEventListener("click", function () {
      window.location.href = "{{ $route }}";
    });

    cart.addEventListener("click", function () {
      window.location.href = "{{ $route2 }}";
    });

	document.getElementById ("nameProfile").innerHTML = "<?php echo $name?>";
	// document.getElementById ("userid").innerHTML = "<?php echo $id?>";
	// document.getElementById ("username").innerHTML = "<?php echo $name?>";
	// document.getElementById ("nameField").placeholder = "<?php echo $name?>";
	// document.getElementById ("email").placeholder = "<?php echo $email?>";

	$(function() {
    // Sidebar toggle behavior
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');

    });
  	});

</script>


</body>
</html>