<?php

namespace App\Http\Controllers;

use App\User;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        //DB::table('users')->where('name', 'John')->first();

        //echo $user->{'userRoles'};
        //$userrole = user.userRoles;

        if ($user->{'userRoles'} == 0) {
            return view('dashboard');
        } else if ($user->{'userRoles'} == 1) {
            return view('sales_rep.salesrep');
        }

    }
}