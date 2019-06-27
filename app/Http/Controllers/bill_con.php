<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bill_con extends Controller
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
        return view('bill');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $customer_name = request('customer_name');
        $amount = request('amount');
        $date=request('date');
        $data=DB::select("SELECT * FROM client WHERE name = ?",[$customer_name,]);
        $client_id=uniqid();
        if($data==null){
            return View('bill',[
            	'error'=>"Please Select A valid Name"
            ]);
        }else{
            $client_id=$data[0]->client_id;
        }
 
        
        DB::insert('insert into bill(customer_name,amount,date,client_id) values (?,?,?,?)',[$customer_name,$amount,$date,$client_id]);
        return view('bill');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=DB:: select("Select client_id,date(date) as 'years' from bill;");
        return View('showbill',['bill_con'=>$data,]);
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

