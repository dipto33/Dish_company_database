<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class branch_con extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('branch_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
        $branch_id = uniqid();
        $branch_name = request('branch_name');
        $branch_city = request('branch_city');
        
        //echo 'helloasassacasca '.$gender;

      DB::insert('insert into branch (branch_id,branch_name,branch_city) values (?,?,?)',[$branch_id,$branch_name,$branch_city,]); 
      //echo $channel_name. " ".$wire_cost." ".$additional_cost." ".$device_cost;
      
     //DB::insert("insert into employee (name,email,phn_no,address,age,gender,salary) values ('11','23','5','22','8','43','34')");
      return view('branch_view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          $data=DB:: select('select * from branch');
        return View ('showbranch',['branch_con'=>$data,]);
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
