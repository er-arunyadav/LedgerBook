@extends('layouts.app')

@section('content')
@include('layouts.alerts')
<br>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-12">
            <div class="card">
                <div class="card-body">
                     {{Auth::user()->name}}
                </div>
            </div>
        </div>	
	</div>
	<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Profile Details</h5>
                                    
                                    <form action="{{route('profile.store')}}" method="post"  enctype="multipart/form-data">
                                    	@csrf
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" value="{{Auth::user()->name}}" placeholder="Enter customer name" name="name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{Auth::user()->email}}" name="email">
                                        </div>
                                        <div class="form-group">
                                        	<label for="old_password">Old Password</label>
                                        	<input type="password" class="form-control" id="form-control" name="old_password" id="old_password">
                                        </div>

                                        <div class="form-group">
                                        	<label for="new_password">New Password</label>
                                        <input type="password" class="form-control" name="new_password">
                                       
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