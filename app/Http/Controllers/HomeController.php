<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\Member;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }    
}
