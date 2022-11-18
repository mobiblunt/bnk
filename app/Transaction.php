<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'category', 'ref', 'narration', 'amount', 'balance', 'name', 'user_id'
    ];
    
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
