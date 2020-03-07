<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'type', 'status', 'validity', 'contact', 'sex', 'address', 'image'
    ];
}
