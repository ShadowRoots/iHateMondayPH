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
	
	$id = $_GET['id'];
	
	$userdetails = DB::table('users')->where('id', '=', $id)->get();
	$usertransactions = DB::table('transactions')->where('user_id', '=', $id)->get();
	
	@endphp
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
background: #9da5dd;
background: -webkit-linear-gradient(to right, #9da5dd, #1d2b8b, #341f6f);
background: linear-gradient(to right, #9da5dd, #1d2b8b, #341f6f);
min-height: 100vh;
overflow-x: hidden;
}


.text-uppercase {
letter-spacing: 0.1em;
}

.text-gray {
color: #aaa;
}

.form-control:focus {
box-shadow: none;
border-color: #341f6f;
}

.profile-button {
background: #341f6f;
box-shadow: none;
border: none
}

.profile-button:hover {
background: #3B71CA
}

.profile-button:focus {
background: #3B71CA;
box-shadow: none
}

.profile-button:active {
background: #341f6f;
box-shadow: none
}

.back:hover {
color: #682773;
cursor: pointer
}

.labels {
font-size: 11px
}

.add-experience:hover {
background: #BA68C8;
color: #fff;
cursor: pointer;
border: solid 1px #341f6f
}

button{
width: 200px;
}

</style>	
</head>
@foreach($userdetails as $user)

Name: {{ $user->name }}
<br>
Email: {{ $user->email }}

@endforeach

@php
			
	try{
		$id = $_GET['id'];
		
		$user = DB::table('users')
			->select('name')
				->where('id', '=', $id)
					->first()
						->name;
		
		$name = $user;
		
		echo $name;
		
		$route = "/profile?id=".$id;
		$route2 = "/cart?id=".$id;
	} catch (Exception $e){
		
		echo "Please Sign Up or Register";
		
		$route = "/login";
		$route2 = "/login";
	}
	
	@endphp
<body style="background-color: #EBE3D5; font-family: 'Tahoma', sans-serif">
	
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
			<div class="media d-flex align-items-center"><img src="/image/profile.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
				<div class="media-body">
				<h4 class="m-0">Jason Doe</h4>
				<p class="font-weight-light text-muted mb-0">User</p>
				</div>
			</div>
        </div>
          
        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
          
		<ul class="nav flex-column bg-white mb-0">
			<li class="nav-item">
				<a href="/" class="nav-link text-dark font-italic">
				  <i class="fa fa-home mr-3 text-primary fa-fw"></i>
				  Home
				</a>
			  </li>
			<li class="nav-item">
				<a href="/userprofile" class="nav-link text-dark font-italic bg-light">
						<i class="fa fa-users mr-3 text-primary fa-fw"></i>
						Profile
					</a>
			</li>
			<li class="nav-item">
				<a href="password.html" class="nav-link text-dark font-italic">
				  <i class="fa fa-unlock-alt mr-3 text-primary fa-fw"></i>
				  Password
				</a>
			</li>
			<li class="nav-item">
				<a href="password.html" class="nav-link text-dark font-italic">
				  <i class="fa fa-cart-shopping mr-3 text-primary fa-fw"></i>
				  Cart
				</a>
			</li>
			<li class="nav-item">
				<a  class="nav-link text-dark font-italic" id="logout-link">
						<i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>
						Logout
				</a>
			</li>
		</ul>
    </div> 

          

	<div class="page-content p-4" id="content">
		<button type = "button" class = "btn btn-dark" id="profile-button">Profile</button>
		<button type = "button" class = "btn btn-dark" id="edit-profile-button">Edit Profile</button>
		<div class="container rounded bg-white mt-3 mb-2">
			<div class="row">
				<div class="col-md-3 border-right">
					<div class="d-flex flex-column align-items-center text-center p-3 py-5">
						
						<img src="/image/profile.png" class="img-thumbnail" alt="...">
						<h1>Name</h1>
						<h6>id</h6>
					</div>
				</div>
				<div class="col-md-5 border-right">
					<div class="p-3 py-5">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<h4 class="text-right">Profile Settings</h4>
						</div>
						<div class="row mt-2">
							<div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""  readonly></div>
							<div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"  readonly></div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""  readonly></div>
							<div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""  readonly></div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email id" value="" readonly></div>
							<div class="col-md-12"><label class="labels">Additional Email</label><input type="text" class="form-control" placeholder="enter email id" value="" readonly></div>
						</div>
						<div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- <a href="{{ route('user.cart', ['id' => $id]) }}" class="btn btn-primary">Cart</a>
<a href="{{ route('user.edit', ['id' => $id]) }}" class="btn btn-primary">Update Details</a>
<a href="{{ route('shop', ['id' => $id]) }}" class="btn btn-primary">Shop</a> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>