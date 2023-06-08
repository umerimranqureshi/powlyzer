<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\NewUserNotification;
use App\Models\Vendor_detail;
use Notification;
use App\Http\Controllers\CustomerCRUDController;

class RegistrationController extends Controller
{
    public function create()
    {
        $user = User::latest('id')->first();
        // print_r($user->id);
        // error_log($user->id);
        $user_id = $user->id;
        // echo $user->id;
        return view('log.vendorForm', ['$user_id'=>$user_id, ]);
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required|confirmed'
        ]);
       
       $user = User::create(request(['name', 'role', 'email', 'password']));

       $userSchema = User::latest('id')->first();
        Notification::send($userSchema, new NewUserNotification($user));
        // dd($userSchema->notifications);
// echo $userSchema->id;
      
      // $userSchema->notify(new NewUserNotification($user));
        
        auth()->login($user);


         
         if($user->role == 'client')
         {
            session(['client_id' => $userSchema->id,]);
            return redirect()->action([CustomerCRUDController::class, 'create']);
          
         }
         elseif ($user->role == 'vendor') {
            //view for vendor to fill their form
             return view('/log/vendorForm', ['name' => $user->name, 'status'=> 0, 'user_id'=>$userSchema->id, ]);
         }
         elseif ($user->role == 'admin') {
             return view('/log/indexadmin', ['name' => $user->name, 'status'=> 0,]);
         }
        else
        {
            return redirect()->to('/index');
        }
        
    }


    public function storeVendor(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            // 'company_name' => 'required',
            // 'status' => 'required',
            // 'user_id' => 'required',
            
            
        ]);
        
        // print_r($request->all());
    // print_r($request->user_id);
        Vendor_detail::create($request->all());
   
       
                        
        return view('/log/notApproved')->with('success','you have signup successfully.');
    }
}
