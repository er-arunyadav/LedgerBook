<?php 

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Ledger;

use App\Customer;

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


function balanceSearch($result){
        $credit =0;
        $debit = 0;
        $balance=0;
        

        foreach($result as $record){
            $credit += $record->credit;
            $debit += $record->debit;
        }

        $balance = $credit - $debit;
        return $balance;
}

function finance(){

     $data = DB::table("ledgers")
                        ->whereYear('date', Carbon::now()->year)
                        ->whereMonth('date', Carbon::now()->month);

            $credit = $data->sum('credit');
            $debit = $data->sum('debit');

            $weekStartDate = Carbon::now()->startOfWeek()->format('Y-m-d');
            $weekEndDate = Carbon::now()->endOfWeek()->format('Y-m-d');

            $weeklyData = Ledger::whereBetween('date',[$weekStartDate,$weekEndDate]);

            $weeklyCredit = $weeklyData->sum('credit');
            $weeklyDebit = $weeklyData->sum('debit');

            $weeklyProfit = $weeklyCredit - $weeklyDebit;

        return array(
            'credit' => $credit,
            'debit' => $debit,
            'weeklyProfit' =>$weeklyProfit
        );
}


function credit (){
    $data = DB::table('ledgers')->select('credit')
                ->whereYear('date', Carbon::now()->year)
                ->whereMonth('date', Carbon::now()->month)
                ->get();
                $credit = array();
                foreach ($data as $result) {
                   $credit[] = $result->credit;
                }
    
    return json_encode($credit);
}

function debit (){
    $data = DB::table('ledgers')->select('debit')
                ->whereYear('date', Carbon::now()->year)
                ->whereMonth('date', Carbon::now()->month)
                ->get();
                $debit = array();
                foreach ($data as $result) {
                   $debit[] = $result->debit;
                }
    
    return json_encode($debit);
}


