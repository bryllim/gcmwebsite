<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'name', 'quantity', 'price', 'member_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
