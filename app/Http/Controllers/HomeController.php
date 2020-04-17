<?php

namespace App\Http\Controllers;
use App\Property;
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
     * Show the user dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the landlord dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landlordDashboard()
    {
        return view('landlord-dashboard');
    }
}
