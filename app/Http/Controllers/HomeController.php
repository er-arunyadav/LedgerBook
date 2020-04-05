<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Ledger;
use App\Customer;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = finance();
        $credit = $data['credit'];
        $debit = $data['debit'];
        $weeklyProfit = $data['weeklyProfit'];
        $customerCount = Customer::count();
        
  
      
        return view('home', [
            'credit' => $credit,
            'debit' =>$debit,
            'weeklyProfit'=>$weeklyProfit,
            'customerCount'=>$customerCount
        ]);
    }
}
