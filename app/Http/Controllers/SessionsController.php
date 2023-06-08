<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client_detail;
use App\Models\Vendor_detail;
use App\Models\Admin_detail;


class SessionsController extends Controller
{
    public function create()
    { 
        return view('sessions.create');
    }
    
    public function store(Request $request)
    {
        if (auth()->attempt(request(['email', 'password', 'role'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        $user = User::where('email' , request(['email']))->get();
        error_log($user);

       //decode
        // $obj = json_decode($user);
        // echo $obj->role;

      

        //echo  session('user');
        // $request->session()->put('user' , [$user => 'name']);
        //  echo $request->session()->get('user');
         foreach ($user as $u) {
            $id = $u->id;

         }
         // print_r($id);

        $role = request(['email',  'role']);

        $status = 0;

   

        if ($role['role'] == "client")
        {
                     //get status to know that user is active ot inactive
            $clients = Client_detail::where('user_id', $id)->get();



              session(['name' => $user[0]->name, 'id' => $user[0]->id, 'sub_id'=>$clients[0]->id, ]);

            foreach ($clients as $key) 
            {
                
                // print_r($key->user_id);
                if(isset($key->user_id))
                {
                    $status = 1;
                    //if in client_detail the status is false then go to approval page
                    if ($key->status == 0) {
                        $status = 0;
                    }
                }
                else
                {
                    $status =0;
                }
            }
            return view('/log/index', ['id' => $id, 'name'=>$user[0]->name, 'status'=> $status,]);
        }
        elseif ($role['role'] == "vendor") 
        {
            $vendors = Vendor_detail::where('user_id', $id)->get();


              session(['name' => $user[0]->name, 'id' => $user[0]->id, 'sub_id'=>$vendors[0]->id, ]);


            foreach ($vendors as $key)
            {
                
                // print_r($key->user_id);
                if(isset($key->user_id))
                {
                    $status = 1;
                    //if in client_detail the status is false then go to approval page
                    if ($key->status == 0) {
                        $status = 0;
                    }
                }
                else
                {
                    $status =0;
                }
            }
             return view('/log/indexvendor', ['id' => $id, 'name'=>$user[0]->name, 'status'=> $status,]);
        }
        elseif ($role['role'] == "admin") 
        {
            
            $admins = Admin_detail::where('user_id', $id)->get();



              session(['name' => $user[0]->name, 'id' => $user[0]->id, 'sub_id'=>$admins[0]->id, ]);


            foreach ($admins as $key)
            {
                
                // print_r($key->user_id);
                if(isset($key->user_id))
                {
                    $status = 1;
                    //if in client_detail the status is false then go to approval page
                    if ($key->status == 0) {
                        $status = 0;
                    }
                }
                else
                {
                    $status =0;
                }
            }
             return view('/log/indexadmin', ['id' => $id, 'name'=>$user[0]->name, 'status'=> $status,]);
        }
        else{
             return redirect()->to('/index');
        }
        
    }
    
    public function destroy(Request $request)
    {
        if (session()->has('id')) {
            $request->session()->flush();
        }
        
        return redirect()->to('/index');
    }
}
