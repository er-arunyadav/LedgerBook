@extends('layouts.app')


@section('content')
@include('layouts.alerts')
<br>
	<div class="container-fluid">
		<div class="row">
      <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <span>{{$customer->name}}</span>
                    <span class="float-right">Balance: 
                      @if($balance > 0)
                        <strong class="text-success"> {{balance($customer->id)}} <i class="fas fa-rupee-sign"></i></span> </strong>
                      @else
                       <strong class="text-danger"> {{(-1)*$balance}} <i class="fas fa-rupee-sign"></i></span> </strong>
                      @endif
                      

                       
                </div>
            </div>
        </div>  
		
		</div>
    
      
      <div class="card">
      <div class="card-body">
        <form action="{{route('ledger.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-xl">
            <input type="hidden" name="customer_id" value="{{$customer->id}}">
            <input type="hidden" name="customer_email" value="{{$customer->email}}">
            <div class="form-group">
              <label for="datepicker">Date</label>
              <input type="text" name="date" class="form-control" value="{{date('d/m/Y')}}" id="datepicker">
            </div>  
          </div>
          <div class="col-xl">
            <div class="form-group">
              <label for="particulars">Particulars</label>
              <input type="text" name="particular" class="form-control" id="particulars">
            </div> 
          </div>
          <div class="col-xl">
            <div class="form-group">
              <label for="credit">Credit</label>
              <input type="text" name="credit" class="form-control" id="credit">
            </div> 
          </div>
          <div class="col-xl">
           <div class="form-group">
              <label for="debit">Debit</label>
              <input type="text" name="debit" class="form-control" id="debit">
            </div> 
          </div>
          <div class="col-xl">
            <div class="form-group">
            <label for="file-input">

            <img src="{{asset('images/upload.png')}}" class="image-upload-icon" />
            </label>
            <p class="pl63 upload-status">Upload image</p>
            <input class="form-control image-upload-input" type="file" id="file-input" name="image">
            </div>
          </div>

          <div class="col-xl">
           <button class="btn btn-primary waves-effect waves-light mt19">Submit</button>
          </div>
        </form>
      </div>  
      </div>

    </div>
		<div class="row">
			<div class="col-12">
				<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ledger Details</h5>
                                    
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                   <tr>
                                                   	<th>Date</th>
                                                   	<th>Particulars</th>
                                                    <th>File</th>
                                                   	<th>Credit</th>
                                                   	<th>Debit</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                 @if(count($records)>0)
                                                  @foreach($records as $record)
                                                    <tr>
                                                      <td>
                                                        {{$record->date}}
                                                      </td>
                                                      <td>
                                                        {{$record->particular}}
                                                      </td>
                                                      <td>
                                                        @if($record->image =='noimage.png')
                                                        
                                                          <a href="{{asset('images/'.$record->image)}}">
                                                          <img src="{{asset('images/'.$record->image)}}" width="50">
                                                        </a>
                                                        @else
                                                        <a href="{{'/storage/ledger/'.$record->image}}">
                                                          <img src="{{'/storage/ledger/'.$record->image}}" width="50">
                                                        </a>
                                                        @endif
                                                      </td>
                                                      <td>
                                                        {{$record->credit}}
                                                      </td>
                                                      <td>
                                                        {{$record->debit}}
                                                      </td>
                                                    </tr>
                                                  @endforeach
                                                 @else
                                                 <tr>
                                                   <td>
                                                     No record found!
                                                   </td>
                                                 </tr>
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
        {{$records->links('vendor.pagination.pagination')}}
      </div>
             
    </div>
	</div>

@endsection