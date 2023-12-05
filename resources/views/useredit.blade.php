<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.homecss')
	
	@php
	
	$id = $_GET['id'];
	
	$userdetails = DB::table('users')->where('id', '=', $id)->get();
	
	@endphp

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
	width: calc(80% - 17rem);
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

	form i, p {
    cursor: pointer;
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
		$route3 = "/editprofile?id=".$id;
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
				<a href="{{ $route }}" class="nav-link text-dark bg-light">
						<i class="fa fa-users mr-3 text-primary fa-fw"></i>
						Profile
					</a>
			</li>
			<li class="nav-item">
				<a href="{{$route2}}" class="nav-link text-dark">
				  <i class="fa fa-cart-shopping mr-3 text-primary fa-fw"></i>
				  Cart
				</a>
			</li>
			<li class="nav-item">
				<a href="/logout"  class="nav-link text-dark" id="logout-link">
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
		<button type = "button" class = "btn btn-dark" id="edit-profile-button">Edit Profile</button>
		<div class="container rounded bgc mt-3 mb-2">
			<div class="row">
				<div class="col-md-3 border-right">
					<div class="d-flex flex-column align-items-center text-center p-3 py-5">
						
						<img src="/image/profile.png" class="img-thumbnail" alt="...">
						<h1 id="username">Name</h1>
						<h6 id="userid">id</h6>
					</div>
				</div>
				<div class="col-md-5 border-right">
					<div class="p-3 py-5">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<h4 class="text-right">Profile Settings</h4>
						</div>
						<form method="POST" action="{{ route('edit', ['id' => $id]) }}">
							@csrf
							@foreach($userdetails as $user)
							<div class="row mt-3">
								<div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"
									name="name" placeholder="Enter Your Name" value="" required></div>
									<div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control"
									name="email" placeholder="Enter Email" value="" required></div>
							</div>
							<div class="row mt-2">
								<div class="col-md-12">
									<label class="labels">Current Password</label>
									<div class="form-group">
									<input type="password" value="" name="old_password" id="old_password" class="form-control" placeholder="Current Password"
									required>
									</div>
								</div>
								<div class="col-md-12">
									<label class="labels">New Password</label>
									<div class="form-group">
									<input type="password" value="" name="new_password" id="new_password" class="form-control" placeholder="New Password" required>
									</i></div>
										
								</div>
								<div class="col-md-12">
									<label class="labels">Confirm Password</label>
									<div class="form-group">
									<input type="password" value="" name="new_password" id="confirm_password" class="form-control" placeholder="Confirm Password"
									required>
									</div>
								</div>
								<div>
									<p class="bi bi-eye-slash" id="togglePassword" id="showPass">&nbsp;&nbsp;Show Password</p>
								</div>
								
							</div>
							<div class="mt text-center"><button class="btn btn-primary profile-button" type="submit">Save
								Profile</button>
							</div>
							@endforeach
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- 
<form method="POST" action="{{ route('edit', ['id' => $id]) }}">
@csrf
@foreach($userdetails as $user)

<input type="hidden" value="{{ $id }}">
Name: <input type="text" name="name" value="{{ $user->name }}"><br>
Email: <input type="email" name="email" value="{{ $user->email }}"><br>
Enter Old Password: <input type="password" name="old_password"><br>
Enter New Password: <input type="password" name="new_password"><br>
<input type="submit" class="btn btn-primary" value="Submit">

@endforeach
</form> --}}
<script>
    var profileButton = document.getElementById("profile-button");
    var editProfileButton = document.getElementById("edit-profile-button");

    profileButton.addEventListener("click", function () {
      window.location.href = "{{ $route }}";
    });

    editProfileButton.addEventListener("click", function () {
      window.location.href = "{{ $route3 }}";
    });

	document.getElementById ("nameProfile").innerHTML = "<?php echo $name?>";
	document.getElementById ("userid").innerHTML = "<?php echo $id?>";
	document.getElementById ("username").innerHTML = "<?php echo $name?>";

	$(function() {
    // Sidebar toggle behavior
    	$('#sidebarCollapse').on('click', function() {
     		$('#sidebar, #content').toggleClass('active');

    	});
  	});

	const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#old_password");
	const password1 = document.querySelector("#new_password");
	const password2 = document.querySelector("#confirm_password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

			 // toggle the type attribute for new_password
			const type1 = password1.getAttribute("type") === "password" ? "text" : "password";
   			password1.setAttribute("type", type1);

    		// toggle the type attribute for confirm_password
    		const type2 = password2.getAttribute("type") === "password" ? "text" : "password";
    		password2.setAttribute("type", type2);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</body>
</html>