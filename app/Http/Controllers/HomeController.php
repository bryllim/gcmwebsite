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

    public function index()
    {
        $revenue = Transaction::sum('price');
        $active = Member::where('validity', '>=', Carbon::now())->count();
        $newmembers = Member::whereMonth('created_at', Carbon::today()->month)
                            ->whereYear('created_at', Carbon::today()->year)
                            ->count();

        $graph_members = [
            'January'   => Member::whereMonth('created_at', 1)->whereYear('created_at', Carbon::today()->year)->count(),
            'February'  => Member::whereMonth('created_at', 2)->whereYear('created_at', Carbon::today()->year)->count(),
            'March'     => Member::whereMonth('created_at', 3)->whereYear('created_at', Carbon::today()->year)->count(),
            'April'     => Member::whereMonth('created_at', 4)->whereYear('created_at', Carbon::today()->year)->count(),
            'May'       => Member::whereMonth('created_at', 5)->whereYear('created_at', Carbon::today()->year)->count(),
            'June'      => Member::whereMonth('created_at', 6)->whereYear('created_at', Carbon::today()->year)->count(),
            'July'      => Member::whereMonth('created_at', 7)->whereYear('created_at', Carbon::today()->year)->count(),
            'August'    => Member::whereMonth('created_at', 8)->whereYear('created_at', Carbon::today()->year)->count(),
            'September' => Member::whereMonth('created_at', 9)->whereYear('created_at', Carbon::today()->year)->count(),
            'October'   => Member::whereMonth('created_at', 10)->whereYear('created_at', Carbon::today()->year)->count(),
            'November'  => Member::whereMonth('created_at', 11)->whereYear('created_at', Carbon::today()->year)->count(),
            'December'  => Member::whereMonth('created_at', 12)->whereYear('created_at', Carbon::today()->year)->count(),
        ];

        $graph_revenue = [
            'January'   => Transaction::whereMonth('created_at', 1)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'February'  => Transaction::whereMonth('created_at', 2)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'March'     => Transaction::whereMonth('created_at', 3)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'April'     => Transaction::whereMonth('created_at', 4)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'May'       => Transaction::whereMonth('created_at', 5)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'June'      => Transaction::whereMonth('created_at', 6)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'July'      => Transaction::whereMonth('created_at', 7)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'August'    => Transaction::whereMonth('created_at', 8)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'September' => Transaction::whereMonth('created_at', 9)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'October'   => Transaction::whereMonth('created_at', 10)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'November'  => Transaction::whereMonth('created_at', 11)->whereYear('created_at', Carbon::today()->year)->sum('price'),
            'December'  => Transaction::whereMonth('created_at', 12)->whereYear('created_at', Carbon::today()->year)->sum('price'),
        ];

        return view('home')->with([
            'revenue'       => $revenue,
            'active'        => $active,
            'newmembers'    => $newmembers,
            'graph_members' => $graph_members,
            'graph_revenue' => $graph_revenue
        ]);
    }
}
