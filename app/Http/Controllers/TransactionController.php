<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function addtocart(Request $request){
		$product_name = $request->input('product_name');
		$product_amount = $request->input('product_amount');
		$user_id = $request->input('user_id');
		
		if($user_id != 0){
			DB::table('transactions')->insert([
				'product_name' => $product_name,
				'product_amount' => $product_amount,
				'user_id' => $user_id
			]);
			
			return redirect()->route('shop', ['id' => $user_id])->with('alert', $product_name.' added to cart');
		} else {
			return view('/login');
		}
	}
	
	public function checkoutform(Request $request){
		return view('checkout');
	}
	
	public function checkout(Request $request){
		$user_id = $request->input('user_id');
		$transaction_id = $request->input('id');
		$item = $request->input('item');
		$amount = $request->input('amount');
		$mode = $request->input('mode');
		$account = $request->input('account');
		$contact = $request->input('contact');
		$address = $request->input('address');
		
		$data = DB::table('transactions')->get();
		
		DB::table('checkouts')->insert([
			'item' => $item,
			'mode' => $mode,
			'account' => $account,
			'amount' => $amount,
			'user_id' => $user_id,
			'transaction_id' => $transaction_id,
			'contact' => $contact,
			'address' => $address,
		]);
		
		return redirect()->route('user.profile', ['id' => $user_id])->with('alert', "Items: ".$item.", Mode Of Payment: ".$mode.", Account: ".$account.", Amount".$amount);
		
	}
}
