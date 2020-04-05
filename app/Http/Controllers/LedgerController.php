<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Customer;
use App\Ledger;
class LedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $usersbalance = Ledger::balance($customers);
        
        $customers = Customer::all();
        return view('admin.ledgers.index')
               ->with('customers',$customers)
                ->with('usersbalance',$usersbalance)
               ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        $q = $request->f;
        $customers = Customer::where('name','LIKE','%'.$q.'%')
                     ->orWhere('email','LIKE','%'.$q.'%')->get();
        
         return view('admin.ledgers.index')
                ->with('customers',$customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'customer_id' => 'required',
            'date' =>'required',
            'particular'=>'required',
           
            'image'=>'image'
        ]);

        if (empty($request->credit)) {
        $credit = 0;    
        }else{
            $credit = $request->credit;
        }

        if (empty($request->debit)) {
        $debit = 0;    
        }else{
            $debit = $request->debit;
        }

        if($request->hasFile('image')){
            $filename = time().$request->image->getClientOriginalName();
            $request->image->storeAs('ledger',$filename,'public');
        }else{
            $filename = 'noimage.png';
        }
        $orgDate = $request->date;
        $date = date("Y-d-m", strtotime($orgDate));
        $ledger = Ledger::create([
            'customer_id' => $request->customer_id,
            'date' =>$date,
            'particular'=>$request->particular,
            'credit'=>$credit,
            'debit'=>$debit,
            'image'=>$filename
        ]);
        Session::flash('success','Record Successfully created');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        $records = Ledger::where('customer_id',$id)->get();
        $balance = $this->balance($records);
        return view('admin.ledgers.details')
        ->with('customer',$customer)
        ->with('balance',$balance)
        ->with('records',$records);
    }

    public function balance($records){

        $credit =0;
        $debit = 0;
        $balance=0;

        foreach($records as $record){
            $credit += $record->credit;
            $debit += $record->debit;
        }

        $balance = $credit - $debit;
        return $balance;


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
