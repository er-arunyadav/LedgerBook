<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ledger;
use App\Customer;
use PDF;
class ReportController extends Controller
{
    public function index()
    {
    	$customers = Customer::all();
    	return view('admin.report.index')->with('customers',$customers);
    }

    public function search(Request $request)
    {
    	$this->validate($request,[
    		'customer_id'=>'required',
    		'date_to' =>'required',
    		'date_from'=>'required'
    	]);
    	
    	$org_date_to = $request->date_to;
    	$org_date_from = $request->date_from;
    	$date_to = date('Y-m-d', strtotime($org_date_to));
    	$date_from = date('Y-m-d', strtotime($org_date_from));
    	$customer_id = $request->customer_id;

    	$customer = Customer::find($customer_id);
    	

    	$result = DB::table('ledgers')
    	    ->where('customer_id',$customer_id)
    		->whereBetween('date',[$date_to,$date_from])->get();

		$balance = balanceSearch($result);

    	$data = array(
            'id' => $customer->id,
    		'name' => $customer->name,
    		'balance'=> $balance,
            'date_to' => $request->date_to,
            'date_from' => $request->date_from,
    	);

    	return view('admin.report.view')
    			->with('data',$data)	
    			->with('records',$result);
    }
    public function pdf($customer_id,$date_to,$date_from){
        
        $customer = Customer::find($customer_id);
        

        $result = DB::table('ledgers')
            ->where('customer_id',$customer_id)
            ->whereBetween('date',[$date_to,$date_from])->get();

        $balance = balanceSearch($result);

        $data = array(
            'id' => $customer->id,
            'name' => $customer->name,
            'balance'=> $balance,
            'date_to' => $date_to,
            'date_from' => $date_from,
        );

        $pdf = PDF::loadView('admin.report.pdf',
            [
           'data' => $data, 
            'records'=>$result,
        ]
        );  
        return $pdf->download('report.pdf');
    }
}
