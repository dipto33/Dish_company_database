<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class client_con extends Controller
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
        return view('client_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $branch_name = request('branch_name');
        $branch_city = request('branch_city');
        $type=request('type_name');
        $name=request('name');
        $phone=request('phn_no');

        $address=request('address');
        $email=request('email');
        $client_id=uniqid();
        $data=DB::select("SELECT * FROM branch WHERE branch_name = ? AND branch_city= ?",[$branch_name,$branch_city]);
        $br_id=uniqid();
        if($data==null){
            DB::insert('INSERT INTO branch (branch_id,branch_name,branch_city) values(?,?,?)',[$br_id,$branch_name,$branch_city]);
        }else{
            $br_id=$data[0]->branch_id;
        }
        $data1=DB::select('SELECT * FROM type WHERE type_name=?',[$type]);
        $type_id=uniqid();
        if($data1==null){
            DB::insert("INSERT INTO type (type_id,type_name) values (?,?)",[$type_id,$type]);
        }else{
            $type_id=$data1[0]->type_id;
        }
        DB::insert('insert into client (branch_id,type_id,client_id,name,address,email,phn_no) values (?,?,?,?,?,?,?)',[$br_id,$type_id,$client_id,$name,$address,$email,$phone]);
        return view('client_view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=DB:: select('select * from client');
        return View('showclient',['client'=>$data,]);
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
