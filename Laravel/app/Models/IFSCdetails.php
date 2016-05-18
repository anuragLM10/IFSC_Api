<?php

namespace App\Models;

use Log;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
//use App\Libraries\Utilities;
use App\Models\User;

/**
* 
*/
class IFSCDetails extends Model
{   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ifsc_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = array(); 
    
	/*
	function __construct(argument)
	{
		# code...
	}*/

   /* public static function getBankDetails() {
        //if($this->CITY == "HUBLI")
          return $this->toArray();

    }*/
	
}

