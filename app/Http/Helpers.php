<?php 
use App\Ledger;

 function balance($id)
{
	    $credit =0;
        $debit = 0;
        $balance=0;
        $records = Ledger::where('customer_id',$id)->get();

        foreach($records as $record){
            $credit += $record->credit;
            $debit += $record->debit;
        }

        $balance = $credit - $debit;
        return $balance;	
}
