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
	$id = $_GET['id'];
	$item = $_GET['item'];
	$amount = $_GET['amount'];
	
	$userdetails = DB::table('users')->where('id', '=', $user_id)->get();
	$usertransactions = DB::table('transactions')->where('id', '=', $id)->get();
	
	@endphp
	
</head>
<body style="background-color: #EBE3D5; font-family: 'Tahoma', sans-serif">

<form method="POST" action="{{ route('item.checkout') }}">
@csrf
<input type="hidden" name="user_id" value="{{ $user_id }}">
<input type="hidden" name="id" value="{{ $id }}">
<input type="hidden" name="amount" value="{{ $amount }}">
<input type="hidden" name="item" value="{{ $item }}">

<input type="text" value="{{ $item }}" disabled><br>
<select name="mode">
	<option>GCash</option>
	<option>BDO Transfer</option>
</select><br>
<input type="text" name="account" placeholder="Account Number"><br>
<input type="text" name="contact" placeholder="Contact Number"><br>
<input type="text" name="address" placeholder="Address to Deliver"><br>

<button type="submit">Check Out</button>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>