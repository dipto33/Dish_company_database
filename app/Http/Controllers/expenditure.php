<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class expenditure extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$max=expenditure::max;
        //$max=DB::table("wire_cost")->$max;
        //return $max;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // DB::insert("insert into employee (name,email,phn_no,address,age,gender,salary) values ('11','23','5','22','8','43','34')");
        //
                return view('expenditure');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
        
        $channel_name = request('channel_name');
        $wire_cost = request('wire_cost');
        $additional_cost = request('additional_cost');
        $device_cost = request('device_cost');
        
        //echo 'helloasassacasca '.$gender;

      DB::insert('insert into expenditure (channel_name,wire_cost,additional_cost,device_cost) values (?,?,?,?)',[$channel_name,$wire_cost,$additional_cost,$device_cost]); 
      //echo $channel_name. " ".$wire_cost." ".$additional_cost." ".$device_cost;
      
     //DB::insert("insert into employee (name,email,phn_no,address,age,gender,salary) values ('11','23','5','22','8','43','34')");
      return redirect('expenditure')->with('success','data added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=DB:: select('select * from expenditure');
        return View ('showexpenditure',['expenditure'=>$data,]);
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
