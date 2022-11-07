<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'pay_option', 'status', 'trans_id','address', 'mobile'
    ];



     public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
