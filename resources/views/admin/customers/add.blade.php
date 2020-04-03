@extends('layouts.app')

@section('content')
@include('layouts.alerts')
<br>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-12">
            <div class="card">
                <div class="card-body">
                    Add Customer 
                </div>
            </div>
        </div>	
	</div>
	<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Create Customer Account</h5>
                                    
                                    <form action="{{route('customer.store')}}" method="post"  enctype="multipart/form-data">
                                    	@csrf
                                        <div class="form-group">
                                            <label for="name">Customer name</label>
                                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter customer name" name="name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                        </div>
                                        <div class="form-group">
                                        	<label for="mobile">Mobile</label>
                                        	<input class="form-control" id="form-control" name="mobile" id="mobile">
                                        </div>

                                        <div class="form-group">
                                        	<label for="address">Address</label>
                                        <textarea cols="5" rows="5" class="form-control" name="address">
                                        	
                                        </textarea>	
                                        </div>
                                        <div class="form-group">
											
											<br>
											<label for="file-input">
												
											<img src="{{asset('images/upload.png')}}" class="image-upload-icon" />
											</label>
											<p class="p10 upload-status">Upload Profile Pic</p>
											<input class="form-control image-upload-input" type="file" id="file-input" name="image">
                                        </div>
                                       <br><br>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </form>
                                </div>
                            </div>
                          
                       
                           
                        </div>
                    </div>
</div>
@endsection