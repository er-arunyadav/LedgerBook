@extends('layouts.app')

@section('content')
@include('layouts.alerts')
<br>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-12">
            <div class="card">
                <div class="card-body">
                    Report
                </div>
            </div>
        </div>	
	</div>
	<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Find Records</h5>
                                    <form action="{{route('report.search')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl">
                                                <div class="form-group">
                                                    <label>Customer</label>
                                                    <select class="select2 form-control" name="customer_id" >
                                                        @if(count($customers)>0)
                                                            @foreach($customers as $customer)
                                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                            @endforeach
                                                            
                                                        @else
                                                            <option>
                                                                No Customer Found
                                                            </option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="col-xl">
                                                <div class="form-group">
                                                    <label>To Date</label>
                                                    <input type="text" name="date_to" class="form-control date">
                                                </div>
                                            </div> 
                                            <div class="col-xl">
                                                <div class="form-group">
                                                    <label>From Date</label>
                                                    <input type="text" name="date_from" class="form-control date">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light h55">Search</button>
                                        </div>
                                        

                                    </form>
                                   
                                </div>
                            </div>
                          
                       
                           
                        </div>
                    </div>
</div>
@endsection