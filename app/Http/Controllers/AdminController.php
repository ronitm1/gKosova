<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class AdminController extends Controller
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
        return view('admindashboard');
    }


     public function profileblade()
    {
        return view('admin.partials.profile');
    }


    public function tablesblade()
    {
        return view('admin.partials.tables');
    }
 

    public function notificationsblade()
    {
        return view('admin.partials.notifications');
    }

    public function reservationsblade()
    {
        return view('admin.partials.reservations');
    }


    public function addemployeeblade()
    {
        return view('admin.partials.addemployee');
    }
}




    



