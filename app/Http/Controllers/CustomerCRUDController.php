<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client_detail;
use App\Models\Invoice;
use App\Models\Vendor_detail;
use App\Models\Device;



class CustomerCRUDController extends Controller
{
   

    public function layout()
    {
        $clients = Client_detail::where('vendor_id',  session('sub_id'))->get('device_id');
        $devices = Device::where('vendor_id', session('sub_id'))->get('id');
       
   
        $cli_count = count($clients);
        $dev_count = count($devices);
        $display = ['cli_count'=>$cli_count, 'dev_count'=>$dev_count,];

// echo $cli_count;
//  echo $dev_count;

        return  $display;
    }



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $display = $this->layout();
        // echo $display['cli_count'];
        // echo $display['dev_count'];
 
        $customers = Client_detail::where('vendor_id', session('sub_id'))->latest()->paginate(5);
        foreach ($customers as $key) {
            # code...
        }

  
        return view('vendor.customerCRUD.index', ['cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'],], compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $vendor = Vendor_detail::where('user_id', session('id'))->latest()->first();
        $display = $this->layout();
        $display = $this->layout();
        
        return view('vendor.customerCRUD.create', ['cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'], 'vendor_id'=>$vendor->id, ]);
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
            'vendor_id' => 'required',
            
            'device_id' => 'required',
            'status' => 'required',
            
            
        ]);
  
        Client_detail::create($request->all());
   
       
                        
        return redirect()->action([CustomerCRUDController::class, 'index'])->with('success','Customer created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $display = $this->layout();


    	$customers = Client_detail::where('id', $id)->get();
    	error_log($customers);
        return view('vendor.customerCRUD.show', ['customers'=> $customers , 'cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'],]);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $display = $this->layout();

    	$customers = Client_detail::where('id', $id)->get();
    	foreach ($customers as $key) {
    		$id = $key->id;
    		$user_id = $key->user_id;
    		$device_id = $key->device_id;
    		$vendor_id = $key->vendor_id;
    		$status = $key->status;
    	}
    	error_log($status);
        return view('vendor.customerCRUD.edit',['id'=>$id, 'user_id'=>$user_id, 'vendor_id'=> $vendor_id, 'device_id'=>$device_id, 'status'=>$status, 'cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'],]);
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
            'vendor_id' => 'required',
            
            'device_id' => 'required',
            'status' => 'required',
            
        ]);
  		$customers = Client_detail::find( $id);
        $customers->update($request->all());
  
        return redirect()->action([CustomerCRUDController::class, 'index'])->with('success','Customer updated successfully');
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
  
       
        return redirect()->action([CustomerCRUDController::class, 'index'])->with('success','Customer deleted successfully');
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
}

