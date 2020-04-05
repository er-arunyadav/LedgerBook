<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use Mail;
use App\Customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('created_at','desc')->paginate(10);
        return view('admin.customers.index')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.customers.add');
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
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'mobile'=>'required|max:10',
            'image' => 'image'
        ]);

       $filename = time().$request->image->getClientOriginalName(); 
       $request->image->storeAs('images',$filename, 'public');

       $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'profile_pic' => $filename
       ]);

       $customerdetails = array(
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
        );

       Mail::to($request->email)->send(new \App\Mail\Customer($customerdetails));
       Session::flash('success','Customer Successfully Created');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.edit')->with('customer',$customer);
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
        $customer = Customer::find($id);
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'mobile'=>'required|max:10',
            'image' => 'image'
        ]);

        if($request->hasFile('image')){
            $filename = time().$request->image->getClientOriginalName(); 
            $request->image->storeAs('images',$filename, 'public');
             $customer->profile_pic = $filename;
        }

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->address = $request->address;
        $customer->save();
       
       Session::flash('success','Customer updated Successfully');
       return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $customer = Customer::find($id);
         $customer->delete();
         Session::flash('success','Customer deleted Successfully');
         return redirect()->back();
    }
}
