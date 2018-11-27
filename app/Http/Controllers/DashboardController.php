<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\SalesData;
use App\SalesRep;
use App\stock;
use App\SupplierData;
use App\User;
use Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Khill\Lavacharts\Lavacharts;

class DashboardController extends Controller
{
    public function admin()
    {

        $suppliers = SupplierData::all();
        $repcounter = SalesRep::count();
        $totalsales = SalesData::count();
        $totalrevenue = SalesData::sum('total_price');



        $result = SalesData::selectRaw('COUNT(*) as count, YEAR(updated_at) year, MONTH(updated_at) month')
            ->groupBy('year', 'month')
            ->get();


        $lavat = new Lavacharts;

        $sales_performance = $lavat->DataTable(); // Lava::DataTable() if using Laravel

        $sales_performance->addDateColumn('date of month')
            ->addNumberColumn('Sales Count ');
            /*->addNumberColumn('Official');*/

        // Random Data For Example

        foreach($result as $results)
            $sales_performance->addRow([
                $results->year.'-'.$results->month.'-01' ,
                $results->count,
            ]);



        $chart = \Lava::BarChart('Mysales', $sales_performance, [
            'title' => 'Total sales per Months',
            'fontSize' => 12,
        ]);

        return view('dashboard', compact('suppliers', 'repcounter', 'totalsales', 'totalrevenue','Mysales'));
    }
    public function table()
    {
        $Sales = SalesData::select('shop_name','shop_address','stock_type','quantity','unit_price','discount','total_price','receiptNo','remarks')->get();
        $SalesRepD= SalesRep::select('name','email','address','phone','salary','grade','sales_per_month')->get();
        $Stocks= stock::all();


        return view('table', compact('Sales','SalesRepD','Stocks'));
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

    protected function update(Request $request)
    {

        $roles = Input::get('userrole');

        $userupdate = User::where('email',$request->email)->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'user_role' => $roles,
        ]);


        if ($roles == "1"){
            $userupdate = SalesRep::where('email',$request->email)->update([
                'id' => $userupdate->id,
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'address' => $request->address,
                'phone' => $request->phone,
                'user_role' => $roles,
            ]);
        }

        return redirect()->route('manageusers');

    }

    protected function delete(Request $request){

        $userdelete = User::where('email',$request->email)->delete();
        $repdelete  = Salesrep::where('email',$request->email)->delete();


        return redirect()->route('deleteusers');
    }


}
