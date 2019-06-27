<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class employee extends Controller
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
         return view('addemployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $employee_id = uniqid();
        $name = request('name');
        $salary = request('salary');
        $phn_no = request('phn_no');
        $address=request('address');
        $shift=request('shift');
        $branch=request('branch');
        $branch_city=request('branch_city');
        $age=request('age');

      //DB::insert('insert into employee (employee_id,name,salary,phn_no,address,shift) values (?,?,?,?,?,?)',[$employee_id,$name,$salary,$phn_no,$address,$shift]);
      $data=DB::select("SELECT * FROM branch WHERE branch_name = ? AND branch_city= ?",[$branch,$branch_city]);
      $br_id=uniqid();
      if($data==null){
            //$br_id=uniqid();
            DB::insert('INSERT INTO branch (branch_id,branch_name,branch_city) values(?,?,?)',[$br_id,$branch,$branch_city]);
      }else{
          $br_id=$data[0]->branch_id;
      }
        DB::insert('insert into employee (employee_id,name,salary,phn_no,address,shift,branch_id,age) values (?,?,?,?,?,?,?,?)',[$employee_id,$name,$salary,$phn_no,$address,$shift,$br_id,$age]);
        return view('addemployee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $data=DB:: select('CALL `Procedure`();');
         foreach ($data as $ds){
            $branch_id=$ds->branch_id;
            //dd($branch_id);
            $branch=DB:: selectOne('select * from branch where branch_id=?',[$branch_id]);
            $ds->branch_name=$branch->branch_name;
            $ds->branch_city=$branch->branch_city;
        }
         //dd($data);
         return View ('showemployee',['employee'=>$data,]);
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
