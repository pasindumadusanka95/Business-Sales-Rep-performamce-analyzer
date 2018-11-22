<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SalesRep;
use App\SupplierData;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class DashboardController extends Controller
{
    public function admin()
    {

        $suppliers = SupplierData::all();
        $repcounter= SalesRep::count();


        return view('dashboard', compact('suppliers','repcounter'));
    }

    public function registration()
    {
        return view('registration');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'address' => 'required|string|max:255|',
            'phone' => 'required|string|min:10|max:10',
            'password' => 'required|string|min:6|confirmed',
            'user_role' => 'required|int|max:2',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {

        $roles = Input::get('role');
        if ($roles = "0") {
            $id = 0;
        }
        if ($roles = "1") {
            $id = 1;
            //create details in the sales rep table too
            SalesRep::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);
        }
        if ($roles = "2") {
            $id = 2;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'user_role' => $id,
        ]);

        return redirect()->route('registration');
    }


}
