<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkouts extends Model
{
    use HasFactory;
	
	protected $fillable = ['item', 'mode', 'account', 'amount', 'user_id', 'transaction_id', 'contact', 'address'];
}
