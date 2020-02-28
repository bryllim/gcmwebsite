<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function solicitation()
    {
        return view('solicitation.solicitation');
    }

    public function newSolicitation()
    {
        return view('solicitation.new-solicitation');
    }

    public function medical()
    {
        return view('medical.medical');
    }

    public function newMedical()
    {
        return view('medical.new-medical');
    }

    public function viewMedical()
    {
        return view('medical.view-medical');
    }

    public function education()
    {
        return view('education.education');
    }

    public function newEducation()
    {
        return view('education.new-education');
    }

    public function viewEducation()
    {
        return view('education.view-education');
    }

    public function burial()
    {
        return view('burial.burial');
    }

    public function newburial()
    {
        return view('burial.new-burial');
    }

    public function viewburial()
    {
        return view('burial.view-burial');
    }
}
