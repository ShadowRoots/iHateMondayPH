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
	
</head>
<body style="background-color: #EBE3D5; font-family: 'Tahoma', sans-serif">

@foreach($usertransactions as $transactions)

<form method="POST" action="{{ route('checkout', ['user_id' => $id, 'item' => $transactions->product_name, 'amount' => $transactions->product_amount, 'id' => $transactions->id]) }}">
@csrf
{{ $transactions->id }}
{{ $transactions->product_name }}
{{ $transactions->product_amount }}
<button type="submit">Checkout</button>
<br>
</form>
@endforeach

<a href="{{ route('user.profile', ['id' => $id]) }}" class="btn btn-primary">Profile</a>
<a href="{{ route('shop', ['id' => $id]) }}" class="btn btn-primary">Shop</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>