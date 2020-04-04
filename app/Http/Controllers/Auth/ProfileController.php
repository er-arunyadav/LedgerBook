<?php
	namespace App\Http\Controllers\Auth;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\User;
	use Session;
class ProfileController extends Controller
{
    public function index(){
    	return view('admin.profile.index');
    }

    public function store(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'email' =>'required',
    		'old_password'=>'required',
    		'new_password'=>'required',
    		'image'=>'image'
    	]);
    	$user = auth()->user();
    	$id = $user->id;
    	
    	$check_password = $request->old_password;
    	
    	$user = User::find($id);

		if (password_verify($check_password, $user->password)) {
		    

		if($request->hasFile('image')){
            $filename = time().$request->image->getClientOriginalName(); 
            $request->image->storeAs('admin',$filename, 'public');
             $user->image = $filename;
        }
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);

 		$user->save();
       
       Session::flash('success','Profile updated Successfully');
       return redirect()->back();

		}else{
			Session::flash('danger','old password is incorrect');
         	return redirect()->back();
		}
    	
    }
}
