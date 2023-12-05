<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.homecss')
	
	@php
	
	$id = $_GET['id'];
	
	$userdetails = DB::table('users')->where('id', '=', $id)->get();
	
	@endphp

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

    img {
      padding-right: 10px;
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

    .logo {
      display: block;
      margin-left: 32%;
      margin-right: 25%;
      width: 50%;
      align-items: end;
      padding-top: 80%;
    }

    /*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

    body {
      background: #341f6f;
      background: -webkit-linear-gradient(to right, #9da5dd, #1d2b8b, #341f6f);
      background: linear-gradient(to right, #9da5dd, #1d2b8b, #341f6f);
      min-height: 100vh;
      overflow-x: hidden;
      font-family: Georgia;
    }

    .separator {
      margin: 3rem 0;
      border-bottom: 1px dashed #fff;
    }

    .text-uppercase {
      letter-spacing: 0.1em;
    }

    .text-gray {
      color: #aaa;
    }

    .cc {
      background-color: rgb(170, 170, 170);
      color: rgb(40, 40, 40);
      opacity: .8;
    }
  </style>
	
</head>
<body>

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
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>