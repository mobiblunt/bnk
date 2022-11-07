<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'transaction_id', 'amount', 'type', 'beneficiary', 'narration', 'swift', 'routing', 'bank_name', 'account', 'address', 'country' 
    ];



     public function transaction()
    {
    	return $this->belongsTo(Transaction::class);
    }
}
