<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
   protected $fillable =[
   	'customer_id','date','particular','credit','debit','image'
   ];

   public static function balance($data){

   		$wallet = array();

   		foreach ($data as  $value) {

			$customers = Self::where('customer_id',$value->id)->get();

			$credit =0;
			$debit = 0;
			$balance=0;

			foreach($customers as  $customer){
    	        $credit += $customer->credit;
        	    $debit += $customer->debit;
	        }

	        $balance = $credit - $debit;
	       
	       $wallet[$value->id] = $balance;


   			
   			
   		}

   		return $wallet;

    }
}
