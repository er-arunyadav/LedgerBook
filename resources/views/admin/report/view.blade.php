@extends('layouts.app')


@section('content')
@include('layouts.alerts')
<br>
	<div class="container-fluid">
		<div class="row">
      <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <span>{{$data['name']}}</span>
                    
                      
                      <a href="{{route('report.pdf',[
                        'id' => $data['id'],
                        'date_to' => date('Y-m-d',strtotime($data['date_to'])),
                        'date_from' => date('Y-m-d',strtotime($data['date_from']))
                      ])}}" class="btn btn-info float-right">Export</a>

                       <span class="float-right p12">Balance: 
                      @if($data['balance'] > 0)
                        <strong class="text-success"> {{$data['balance']}} <i class="fas fa-rupee-sign"></i></span> </strong>
                      @else
                       <strong class="text-danger"> {{(-1)*$data['balance']}} <i class="fas fa-rupee-sign"></i></span> </strong>
                      @endif
                </div>
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

     
	</div>

@endsection