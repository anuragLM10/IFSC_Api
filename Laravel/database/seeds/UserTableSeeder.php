<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Query\Builder ;
use App\User;
//use DB;
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        //DB::table('ifsc_details')->delete();

        
     $dir = "database/data/by-bank" ;
        // src: http://is.php.net/manual/en/function.opendir.php
        //$count= 0 ;
        // Open a known directory, and proceed to read its contents
     $count=0;
     if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
           $file="database/data/by-bank/" ;  // otherwise file not found in directory 
           while (($file.= readdir($dh)) !== false & $count<176) {
               if(!is_dir($file)){
                 $json = file_get_contents( $file ) ;
                 $data = json_decode($json, true)   ; 
                //echo $count;
                 foreach ($data as $obj) {
                //foreach($var as $key=>$obj) {  
                    DB::table('ifsc_details')->insert( array(
                    'BANK' => $obj["BANK"],
                    'IFSC' => $obj["IFSC"],
                    'BRANCH' => $obj["BRANCH"],
                    'ADDRESS' => $obj["ADDRESS"],
                    'CONTACT' => $obj["CONTACT"],
                    'CITY' => $obj["CITY"],
                    'DISTRICT' => $obj["DISTRICT"],
                    'STATE' => $obj["STATE"] 
                    ));
                  } //end foreach  
                } // end if

                $file="database/data/by-bank/" ;
                $count+=1;
            } // end whlile
         closedir($dh);
        }
      }

  
// CODE FOR INSERTING A SINGLE JSON INTO DATABASE
      /*  $json = file_get_contents("database/data/MAHB.json");
        $data = json_decode($json, true); 
        foreach ($data as $obj) {
          //foreach($var as $key=>$obj) {  
             DB::table('ifsc_details')->insert( array(
            'BANK' => $obj["BANK"],
            'IFSC' => $obj["IFSC"],
            'BRANCH' => $obj["BRANCH"],
            'ADDRESS' => $obj["ADDRESS"],
            'CONTACT' => $obj["CONTACT"],
            'CITY' => $obj["CITY"],
            'DISTRICT' => $obj["DISTRICT"],
            'STATE' => $obj["STATE"] 
            ));
          //}    
        }*/
    }
 
}
 
?>