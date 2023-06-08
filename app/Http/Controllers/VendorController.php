<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor_detail;
use App\Models\Device;
use App\Models\Client_detail;
use App\Models\Invoice;
use App\Models\Admin_detail;
use App\Models\User;

class VendorController extends Controller
{

    public function __construct(Request $request){
      $this->middleware('auth');
      //response is here in handler
      //C:\Users\Umer\Documents\laravel\powlyzer\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions
    }







   
     public function homedash(){

        $notifications = auth()->user()->unreadNotifications;

        $vendor_id = Vendor_detail::where('user_id', session('id'))->first();

        $clients = Client_detail::where('vendor_id',  $vendor_id->id)->get('device_id');
        $devices = Device::where('vendor_id', $vendor_id->id)->get('id');
       
   
        $cli_count = count($clients);
        $dev_count = count($devices);

        $company_name = $vendor_id->company_name;
        return view('vendor/homedash' , ['cli_count' => $cli_count, 'dev_count' => $dev_count, 'company_name'=> $company_name, ],  compact('notifications'));
       

    }

    

	 public function customer(){
        $user_id = session('id');

         #for getting device and users
        $clients = Client_detail::where('vendor_id', '=', $user_id)->get();
        $devices = Device::where('vendor_id', '=', $user_id)->get('id');
       
  
        $cli_count = count($clients);
        $dev_count = count($devices);
 


    	$clients = Client_detail::all();
    	return view('vendor/customer' , ['clients' => $clients, 'cli_count' => $cli_count, 'dev_count' => $dev_count,])->with('i', (request()->input('page', 1) - 1) * 5);
    }




    public function inbox() {
        return view('vendor/inbox');
    }

    public function invoice() {
         $clients = Client_detail::where('vendor_id',  session('sub_id'))->get('device_id');
        $devices = Device::where('vendor_id', session('sub_id'))->get('id');
       
   
        $cli_count = count($clients);
        $dev_count = count($devices);




        $invoices = Invoice::where('user_id_receiver', session('id'))->get();

      foreach ($invoices as $invoice) {
        $admin_id =  $invoice->user_id_generater;
        $product_name = $invoice->product_name;
        $quantity = $invoice->quantity;
        $rate = $invoice->rate;
        $created_at = $invoice->created_at;

      }

       $admins = Admin_detail::where('user_id', $admin_id)->get();

       $users = User::where('id', $admin_id)->get();



        

        return view('vendor/invoice' , ['cli_count' => $cli_count, 'dev_count' => $dev_count, 'invoices'=>$invoices, 'created_at'=>$created_at, 'admins'=>$admins, 'users'=>$users,]);
    }

    public function calender() {
        return view('vendor/calender');
    }

    public function setting() {
        
        $clients = Client_detail::where('vendor_id',  session('sub_id'))->get('device_id');
        $devices = Device::where('vendor_id', session('sub_id'))->get('id');
       
   
        $cli_count = count($clients);
        $dev_count = count($devices);

        return view('vendor/setting' , ['cli_count' => $cli_count, 'dev_count' => $dev_count,]);

    }

    public function in() {
        return view('vendor/in');
    }


    public function device(){


        #for getting device and users
        $clients = Client_detail::where('vendor_id', '=', '12')->get('device_id');
        $devices = Device::where('vendor_id', '=', '12')->get('id');
       
   
        $cli_count = count($clients);
        $dev_count = count($devices);





        $devices = Device::all();
        return view('vendor/device' , ['devices' => $devices, 'cli_count' => $cli_count, 'dev_count' => $dev_count,])->with('i', (request()->input('page', 1) - 1) * 5);
    }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDevice()
    {
        $products = Device::latest()->paginate(5);
    
        return view('vendor/device',compact('products'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDevice()
    {
        return view('products.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDevice(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Product::create($request->all());
     
        return redirect()->route('vendor/device')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function showDevice(Product $product)
    {
        return view('products.show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function editDevice(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateDevice(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('vendor/device')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroyDevice(Product $product)
    {
        $product->delete();
    
        return redirect()->route('vendor/device')
                        ->with('success','Product deleted successfully');
    }


}
