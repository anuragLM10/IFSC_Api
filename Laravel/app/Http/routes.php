<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('hello' , 'MyController@testFunction') ;//{
*/
	//return view('hello') ;
//});
Route::get('bankdetails/ifsc/{ifsc}' , 'IFSC_controller@getBankDetailsUsingIFSC');
Route::get('bankdetails/banklist' , 'IFSC_controller@getUniqueBank');
Route::get('bankdetails/statelist' , 'IFSC_controller@getUniqueStates');
Route::get('bankdetails/state/{state}' , 'IFSC_controller@getBankDetailsUsingState');
Route::get('bankdetails/address/{address}' , 'IFSC_controller@getBankDetailsUsingAddress');
Route::get('bankdetails/bank/{bank}' , 'IFSC_controller@getBranchUsingBank');
Route::get('bankdetails/bankbranch/{bank}/{branch}' , 'IFSC_controller@getBankDetailsUsingBankBranch');

/*Route::group(['as' => 'testing' ],function(){
	Route::get('runscript','MyController@testFunction');
});*/
//getBankDetailsUsingAddress
//showBankDetails