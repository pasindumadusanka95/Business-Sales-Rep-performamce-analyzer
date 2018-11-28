<?php

namespace App\Http\Controllers;
use App\Management;
use App\SalesRep;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class managementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $mgt = Management::where('id',3)->first();
        return view('management.mgedit',compact('mgt'));
    }
    public function index2()
    {
        $mgt = Management::where('id',2)->first();
        return view('management.mgedit',compact('mgt'));
    }
    public function index3()
    {
        $mgt = Management::where('id',1)->first();
        return view('management.mgedit',compact('mgt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       // $rgrade = explode(' ',$request->grade);
        $grade = $request->grade;
        //$rsal = explode(' ',$request->sal);
        $sal = $request->sal;
       // $rrate = explode(' ',$request->rate);
        $rate = $request->rate;
        $row = Management::where('grade',$grade)->first();
        if(!is_null($grade)){
            $row->grade = $grade;
        }
        if(!is_null($sal)){
            $row->basic_sal = $sal;
        }
        if(!is_null($rate)){
            $row->add_rate = $rate;
        }
        $row->save();
        return redirect()->route('management');
    }

    public function search(Request $request)
    {
        $active = 1;
        $mgt = Management::all();
        $rep = SalesRep::where('id',$request->id)->first();
        $grade = $rep->grade;
        $grow = Management::where('grade',$grade)->first();
        $gsal = $grow->basic_sal;
        $grate = $grow->add_rate;
        $gtarg = $grow->target;
        $dif = $rep->sales_per_month - $gtarg;
        if ($dif<0) {
            $extra = 0;
        } else {
            $extra = ($dif*$grate);
        }
        $total = $extra + $gsal;
        return view('management.management',compact('mgt','active','rep','dif','gsal','extra','total'));

    }

    public function addsal(Request $request)
    {
        $mgt = Management::all();
        $row = SalesRep::where('id',$request->id)->first();
        $row->salary = $request->tot;
        $active = 0;
        $row->save();
        return view('management.management',compact('mgt','active'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
