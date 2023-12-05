<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signup(Request $request){
		DB::table('users')->insert([
			'name' => $request->name,
			'email' => $request->email,
			'password' => $request->password
		]);
		echo '<script>alert("Registration successful! You can now log in.")</script>';
		return view('login');
	}
	
	public function loginuser(Request $request){
		$email = $request->email;
		$password = $request->password;
		$access = false;
		$users = DB::table('users')->get();
		
		foreach($users as $user){
			$emaildb = $user->email;
			$passworddb = $user->password;
			
			if($email == $emaildb && $password == $passworddb){
				$access = true;
				$id = $user->id;
			} else {
				$access = false;
			}
			
			if($access == true){
				session()->put('isLoggedIn', true); 
				session()->put('name', $user->name); 
				session()->put('id', $user->id);
				session()->put('email', $user->email);
				return redirect()->route('shop', ['id' => $id]);
			}
			
		}
		
		if($access == false){
			return redirect()->route('login')->with('alert', 'User not recognized');
		}
	}
	
	public function profile(){
		return view('userprofile');
	}
	
	public function cart(){
		return view('cart');
	}
	
	public function edit(){
		return view('useredit');
	}

	public function editprofile(Request $request){
		$id = $request->id;
		$newname = $request->name;
		$newemail = $request->email;
		$opass = $request->old_password;
		$edit = false;
		$users = DB::table('users')->get();
		
		foreach($users as $user){
			$iddb = $user->id;
			$password = $user->password;
			
			if($iddb == $id && $password == $opass){
				$edit = true;
			} else {
				$edit = false;
			}
			
			if($edit){
				DB::table('users')->where('id', '=', $id)
					->update([
						'name' => $newname,
						'email' => $newemail,
						'password' => $request->new_password
					]);
					
				return redirect()->route('user.profile', ['id' => $id]);
			}
		}
		
		if($edit == false){
			return redirect()->route('user.profile', ['id' => $id])->with('alert', 'Password does not match');
		}
		
	}
}
