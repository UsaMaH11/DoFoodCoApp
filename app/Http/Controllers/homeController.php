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
    public function userManagementIndex()
    {
        return view('admin.user-management');
    }
    public function shopManagementIndex()
    {
        return view('admin.shop-management');
    }
    public function requestedFood()
    {
        return view('admin.requested-food');
    }
}
