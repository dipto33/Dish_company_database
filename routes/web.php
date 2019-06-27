<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('addemployee','employee@create');
//Route::view('addemployee','employee@create');

Route::view('expenditure','expenditure');
Route::post('xexpenditure','expenditure@store');
Route::get('/showexpenditure','expenditure@show');
//Route::view('addemployee','addemployee');
Route::view('type','type_view');
Route::post('xtype','type_con@store');
Route::get('/showtype','type_con@show'); 

Route::view('branch','branch_view');
Route::post('xbranch','branch_con@store');
Route::get('/showbranch','branch_con@show');

Route::view('employee','addemployee');
Route::post('xemployee','employee@store');
Route::get('/showemployee','employee@show');

Route::view('client','client_view');
Route::post('xclient','client_con@store');
Route::get('/showclient','client_con@show');

Route::view('bill','bill');
Route::post('xbill','bill_con@store');
Route::get('/showbill','bill_con@show');

Route::get('/agg','agg@create');
Route::get('/join1','join1@create');
Route::get('/subquery','subquery_con@create');
Route::get('/union','union_con@create');


