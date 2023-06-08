<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor_detail;
use App\Models\User;



class ADMINVendorCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor_detail::latest()->paginate(5);
  
        return view('admin.vendorCRUD.index',compact('vendors'))
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

        $vendor = Vendor_detail::where('user_id', $user_id)->first();

        return view('admin.vendorCRUD.create', ["user_id"=>$user_id, 'name'=>$name, 'email'=>$email, 'role'=>$role, 'vendor' =>$vendor, ]);

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
            // 'user_id' => 'required',
            // 'company_name' => 'required',
            'status' => 'required',
            // 'user_id' => 'required',
            
            
        ]);
  print_r($request->all());
    // print_r($request->user_id);
        // Vendor_detail::create($request->all());
   
       $vendor = Vendor_detail::find( $request->id);
        $vendor->update($request->all());
                        
        return redirect()->action([ADMINVendorCRUDController::class, 'index'])->with('success','Vendor created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendors = Vendor_detail::where('id', $id)->get();
        // error_log($customers);

        foreach ($vendors as $key) {
            $id = $key->id;
            $user_id = $key->user_id;
            $phone = $key->phone;
            $cnic = $key->cnic;
            $company_name = $key->company_name;
            $status = $key->status;
        }

        $user = User::where('id',$user_id)->get();
        foreach ($user as $key) {
           $name = $key->name;
           $email = $key->email;
           $role = $key->role;
        }
        

    	$vendor = Vendor_detail::where('id', $id)->get();
    	error_log($vendor);
        return view('admin.vendorCRUD.show', ['vendor'=> $vendor, 'name'=>$name, 'email'=>$email,]);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendors = Vendor_detail::where('id', $id)->get();
        foreach ($vendors as $key) {
            $id = $key->id;
            $company_name = $key->company_name;
            $cnic = $key->cnic;
            $phone = $key->phone;
            $user_id = $key->user_id;
            $status = $key->status;
        }
        // error_log($status);


        $user = User::where('id',$user_id)->get();
        foreach ($user as $key) {
           $name = $key->name;
           $email = $key->email;
           $role = $key->role;
        }
   	
    	// error_log($status);
        return view('admin.vendorCRUD.edit',['id'=>$id, 'company_name'=>$company_name, 'cnic'=> $cnic, 'phone'=>$phone, 'status'=>$status, "user_id"=>$user_id, 'name'=>$name, 'email'=>$email, 'role'=>$role,]);
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
  		$vendor = Vendor_detail::find( $id);
        $vendor->update($request->all());
  
        return redirect()->action([ADMINVendorCRUDController::class, 'index'])->with('success','Vendor updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$vendor = Vendor_detail::find($id);
        $vendor->delete();
  
       
        return redirect()->action([ADMINVendorCRUDController::class, 'index'])->with('success','Vendors deleted successfully');
    }



      public function invoice($id)
    {
        $display = $this->layout();


        // print_r(session('id'));
        $invoices = Invoice::where('user_id_receiver' , $id)->where('user_id_generater', session('id'))->get();
  // print_r($invoices);
        $client_id = $id;
        $vendor_id = session('id');
        $i=1; 

        return view('vendor.customerCRUD.invoice',['invoices'=>$invoices, 'client_id'=>$client_id, 'vendor_id' => $vendor_id , 'cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'],])->with('i');
       // return redirect()->action([DeviceCRUDController::class, 'index'])->with('success','Dues updated successfully'); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoiceCreate($client_id, $vendor_id)
    {
        $display = $this->layout();

        $invoices = Invoice::where('user_id_receiver' , $client_id)->where('user_id_generater', session('id'))->latest()->first();
        // foreach ($invoices as $invoice) {
        //     print_r($invoice->invoice_id);
        // }
        
        // print_r($invoices);
        if(is_null($invoices))
        {
            $invoice_id =1;
        }
        else{
           
            $invoice_id = $invoices->invoice_id; + 1;
        }
        
        
        // print_r($client_id);
        // print_r($vendor_id);
        return view('vendor.customerCRUD.invoiceCRUD.create', ['client_id'=>$client_id, 'vendor_id'=>$vendor_id, 'invoice_id'=>$invoice_id, 'cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'],] );
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoiceStore(Request $request)
    {
        $request->validate([
            'invoice_id' => '',
            'user_id_generater' => 'required',
            
            'user_id_receiver' => 'required',
            
            
            
        ]);
  
        Invoice::create($request->all());
   
       
                        
        return redirect()->action([CustomerCRUDController::class, 'index'])->with('success','Invoice created successfully.');
    }
   
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function invoiceEdit($id)
    {
        $display = $this->layout();

        $invoices = Invoice::where('id', $id)->get();
        foreach ($invoices as $key) {
            $id = $key->id;
            $invoice_id = $key->invoice_id;
            $description = $key->description;
            $product_name = $key->product_name;
            $user_id_generater = $key->user_id_generater;
            $user_id_receiver = $key->user_id_receiver;
            $quantity = $key->quantity;
            $rate = $key->rate;
            $paid_date = $key->paid_date;
        }
        // error_log($status);
        return view('vendor.customerCRUD.invoiceCRUD.edit',['id'=>$id, 'product_name'=>$product_name, 'user_id_generater'=>$user_id_generater, 'user_id_receiver'=>$user_id_receiver,  'quantity'=> $quantity, 'rate'=>$rate, 'paid_date'=>$paid_date, 'invoice_id'=>$invoice_id, 'description'=>$description, 'cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'], ]);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function invoiceUpdate(Request $request, $id)
    {
        $request->validate([
            
            
            
        ]);
        $invoices = Invoice::find( $id);
        $invoices->update($request->all());
  
        return redirect()->action([CustomerCRUDController::class, 'index'])->with('success','Invoice updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function invoiceDestroy($id)
    {
        $invoices = Invoice::find($id);
        $invoices->delete();
  
       
        return redirect()->action([CustomerCRUDController::class, 'index'])->with('success','Invoice deleted successfully');
    }

    // 
}
