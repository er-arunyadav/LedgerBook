@extends('layouts.app')


@section('content')
@include('layouts.alerts')
<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title">
					Ledger
				</div>
			</div>
		</div>
@if(count($customers)>0)
<div class="row">
      <div class="col-8">
        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <label for="search" class="">
                              <button class="btn btn-primary waves-effect waves-light rounded-pill">search</button>
                             </label>
                            
         </form>
      </div>
</div>
@endif
		@if(count($customers)>0)
        @foreach($customers->chunk(4) as $chunk)
               <div class="row">
               

          @foreach($chunk as $customer)
          <div class="col-xl-3">
          <div class="card">
         
				  	                                <img src="{{asset('storage/images/'.$customer->profile_pic)}}" class="card-img-top img-card" alt="user image">
                                <div class="card-body">
                                  <h5 class="card-title">{{$customer->name}}</h5>
                                   
                                    <a href="{{route('ledger.details',['id'=>$customer->id])}}" class="btn btn-primary waves-effect waves-light">Go Ledger</a>
                                </div>
             
            </div>
             </div>
             @endforeach 
                    
           
            </div>
        @endforeach
    @else
      <h4 class="text-center">No user found</h4>     
		@endif

	</div>

@endsection