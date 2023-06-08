<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client_detail;
use App\Models\User;
use App\Models\Device;
use App\Models\Vendor_detail;


class ADMINCustomerCRUDController extends Controller
{
   

    public function getvalues()
    {
         $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);
       
    }



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Client_detail::latest()->paginate(5);
  
        return view('admin.customerCRUD.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        $user = User::where('id',$user_id)->get();
        foreach ($user as $key) {
           $name = $key->name;
           $email = $key->email;
           $role = $key->role;
        }

        return view('admin.customerCRUD.create', ["user_id"=>$user_id, 'name'=>$name, 'email'=>$email, 'role'=>$role, ]);

    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            
            'status' => 'required',
            
            
        ]);
  
        Client_detail::create($request->all());
   
       
                        
        return redirect()->action([ADMINCustomerCRUDController::class, 'index'])->with('success','Customer created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$customers = Client_detail::where('id', $id)->get();
    	// error_log($customers);

        foreach ($customers as $key) {
            $id = $key->id;
            $user_id = $key->user_id;
            $device_id = $key->device_id;
            $vendor_id = $key->vendor_id;
            $status = $key->status;
        }

        $user = User::where('id',$user_id)->get();
        foreach ($user as $key) {
           $name = $key->name;
           $email = $key->email;
           $role = $key->role;
        }
        return view('admin.customerCRUD.show', ['customers'=> $customers, 'name'=>$name, 'email'=>$email,]);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    	$customers = Client_detail::where('id', $id)->get();
    	foreach ($customers as $key) {
    		$id = $key->id;
    		$user_id = $key->user_id;
    		$device_id = $key->device_id;
    		$vendor_id = $key->vendor_id;
    		$status = $key->status;
    	}
    	// error_log($status);


        $user = User::where('id',$user_id)->get();
        foreach ($user as $key) {
           $name = $key->name;
           $email = $key->email;
           $role = $key->role;
        }



        return view('admin.customerCRUD.edit',['id'=>$id, "user_id"=>$user_id, 'name'=>$name, 'email'=>$email, 'role'=>$role, 'vendor_id'=> $vendor_id, 'device_id'=>$device_id, 'status'=>$status,]);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            
            'status' => 'required',
            
        ]);
  		$customers = Client_detail::find( $id);
        $customers->update($request->all());
  
        return redirect()->action([ADMINCustomerCRUDController::class, 'index'])->with('success','Customer updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$customers = Client_detail::find($id);
        $customers->delete();
  
       
        return redirect()->action([ADMINCustomerCRUDController::class, 'index'])->with('success','Customer deleted successfully');
    }
}

