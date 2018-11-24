<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Redirect;

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
        $name = $user->name;
        //DB::table('users')->where('name', 'John')->first();

        //echo $user->{'userRoles'};
        //$userrole = user.userRoles;

        if ($user->{'user_role'} == 0) {
            //return view('dashboard');
            return Redirect::to('/admin');
        } else if ($user->{'user_role'} == 1) {
            return redirect("/salesRep" . $name);
            //return view('sales_rep.salesrep');
        } else if ($user->{'user_role'} == 2) {
            return redirect("/stockkeeper");
        }

    }

    public function return_home()
    {
        return view('welcome');
    }
}