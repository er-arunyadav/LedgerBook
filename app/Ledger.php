<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
   protected $fillable =[
   	'customer_id','date','particular','credit','debit','image'
   ];
}
