<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SalesData;
use App\SalesRep;
use App\stock;
use App\SupplierData;
use App\User;
use App\Management;
use Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class DashboardController extends Controller
{
    public function admin()
    {

        $suppliers = SupplierData::all();
        $repcounter = SalesRep::count();
        $totalsales = SalesData::count();
        $totalrevenue = SalesData::sum('total_price');

        /*$chartdata = SalesData::select(DB::raw('count('*') as `count`'), DB::raw('MONTH(dateOfSale) month'))
        ->groupBy(function($m) {
        return Carbon::parse($m->dateOfSale)->format('m');
        })->get();*/
       /* if (SalesData::all() != null) {
            $chartdata = SalesData::selectRaw('COUNT(*) as count, YEAR(updated_at) year, MONTH(updated_at) month')
                ->groupBy('year', 'month')
                ->get();
        }*/
        /* $chartdata=SalesData::where(DB::raw("(DATE_FORMAT(dateOfSale,'%M'))"),date('M'))->get();*/
        /*$chart = Charts::database($chartdata, 'bar', 'highcharts')
            ->title("Sales Details")
            ->elementLabel("Total Sales")
            ->dimensions(1000, 500)
            ->responsive(false);*/

       /* $result = SalesData::selectRaw('COUNT(*) as count, MONTH(updated_at) month')
            ->groupBy('month')
            ->get();*/
        return view('dashboard', compact('suppliers', 'repcounter', 'totalsales', 'totalrevenue'));
    }
    public function table()
    {
        $Sales = SalesData::select('shop_name','shop_address','stock_type','quantity','unit_price','discount','total_price','receiptNo','remarks')->get();
        $SalesRepD= SalesRep::select('name','email','address','phone','salary','grade','sales_per_month')->get();
        $Stocks= stock::all();


        return view('table', compact('Sales','SalesRepD','Stocks'));
    }
     public function chart()
       {
           $result = SalesData::selectRaw('COUNT(*) as count, MONTH(updated_at) month')
               ->groupBy('month')
               ->get();
           return response()->json($result);
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

    protected function management()
    {
        $mgt = Management::all();
        return view('management.management',compact('mgt'));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {

        $roles = Input::get('userrole');

        //registration - user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'user_role' => $roles,
        ]);
        //create details in the sales rep table too
        if ($roles == "1") {
            SalesRep::create([
                'id' => $user->id,
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->name,
                'phone' => $request->phone,
            ]);
        }

        return redirect()->route('registration');

    }

}
