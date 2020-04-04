@extends('layouts.app')


@section('content')
@include('layouts.alerts')
<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title">
					View Customer
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Customer Details</h5>
                                    
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                   <tr>
                                                   	<th>id#</th>
                                                   	<th>Avatar</th>
                                                   	<th>Customer name</th>
                                                   	<th>Email</th>
                                                   	<th>Mobile</th>
                                                   	<th>Address</th>
                                                   	<th>Edit</th>
                                                    <th>Delete</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                  @if(count($customers)>0)
                                                  	@foreach($customers as $customer)
                                                  	<tr>
                                                  		<td>{{$customer->id}}</td>
                                                  		<td>
                                                  			<img src="{{asset('storage/images/'.$customer->profile_pic)}}"
                                                  			width="50" 
                                                  			 />
                                                  		</td>
                                                  		<td>
                                                  			{{$customer->name}}
                                                  		</td>
                                                  		<td>
                                                  			{{$customer->email}}
                                                  		</td>
                                                  		<td>
                                                  			{{$customer->mobile}}
                                                  		</td>
                                                  		<td>
                                                  			{{$customer->address}}
                                                  		</td>
                                                  		<td>
                                                  			<a href="{{route('customer.edit',['id'=>$customer->id])}}" class="btn btn-success">Edit
                                                  			</a>
                                                        </td>
                                                        <td>
                                                  			<a href="{{route('customer.delete',['id'=>$customer->id])}}" class="btn btn-danger">Delete</a>
                                                  		</td>
                                                  	</tr>
                                                  	@endforeach
                                                  @else
                                                  <tr><td>No data found!</td></tr>
                                                  @endif
                                                </tbody>
                                            </table>
                                        </div>      
                                    </div>
                                </div>
                 </div>    	
                 
			</div>
		</div>

    <div class="row">
      <div class="col-12">
        {{$customers->links('vendor.pagination.pagination')}}
      </div>
             
    </div>
	</div>

@endsection