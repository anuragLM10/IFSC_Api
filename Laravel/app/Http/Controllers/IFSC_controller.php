<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

use App\Models\IFSCdetails;

class IFSC_controller extends Controller
{
     // get bank data using State
     public function getBankDetailsUsingState($state)
    {
        $data = IFSCdetails::where("STATE", "=", $state)->get();//get() ;  //first() ;  //->count();

        return ($data);
    }

     // get list of all banks
     public function getUniqueBank()
    {
        $data =  IFSCdetails::select('BANK')->groupBy('BANK')->get();//->toArray() ;
   //first() ;  //->count();

        return ($data);
    }
     
     // get bank data using IFSC
     public function getBankDetailsUsingIFSC($ifsc)
    {
        $data = IFSCdetails::where("IFSC", "=", $ifsc)->get() ;  //first() ;  //->count();

        return ($data);
    }

    // get list of all the states in the given dataset 
    public function getUniqueStates()
    {
        $data =  IFSCdetails::select('STATE')->groupBy('STATE')->get();//->toArray() ;
        return ($data);
    }
     
    // get bank details maing an address query 
     public function getBankDetailsUsingAddress($address)
    {
        $data = IFSCdetails::where("ADDRESS", "=", $address)->get() ;  //first() ;  //->count();

        return ($data);
    }

    // get bank details maing an address query
    public function getBranchUsingBank($bank)
    {
        $data = IFSCdetails::where("BANK", "=", $bank)->select('BRANCH')->get() ;  //first() ;  //->count();

        return ($data);
    }

    public function getBankDetailsUsingBankBranch($bank , $branch)
    {
        $data = IFSCdetails::where("BANK", "=", $bank)->where("BRANCH", "=", $branch)->first() ;  //first() ;  //->count();

        return ($data);
    }

}
