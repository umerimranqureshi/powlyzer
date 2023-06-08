<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Client_detail;
use App\Models\Vendor_detail;

class DeviceCRUDController extends Controller
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

        $blogs = Device::where('vendor_id', session('sub_id'))->latest()->paginate(5);
  
        return view('vendor.deviceCRUD.index', ['cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'],], compact('blogs'))
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
       
        return view('vendor.deviceCRUD.create' , ['cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'], 'vendor_id'=>$vendor->id, ]);
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
            'name' => 'required',

            
            'vendor_id' => 'required',
            'firebase_id' => 'required',
            
        ]);
  
        Device::create($request->all());
   
       
                        
        return redirect()->action([DeviceCRUDController::class, 'index'])->with('success','Blog created successfully.');
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


    	$blog = Device::where('id', $id)->get();
    	error_log($blog);
        return view('vendor.deviceCRUD.show', ['blog'=> $blog, 'cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'], ]);
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

    	$blog = Device::where('id', $id)->get();
    	foreach ($blog as $key) {
    		$id = $key->id;
    		$name = $key->name;
    		$model = $key->model;
    		$description = $key->description;
    		$installed = $key->Installed;
    		$vendor_id = $key->vendor_id;
    		$firebase_id = $key->firebase_id;
    		$status = $key->status;
    	}
    	error_log($status);
        return view('vendor.deviceCRUD.edit',['id'=>$id, 'name'=>$name, 'description'=> $description, 'model'=>$model, 'installed'=>$installed, 'vendor_id'=>$vendor_id, 'firebase_id'=>$firebase_id, 'status'=>$status, 'cli_count'=>$display['cli_count'], 'dev_count'=> $display['dev_count'], ]);
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
            'name' => 'required',
            
            'vendor_id' => 'required',
            'firebase_id' => 'required',
            
        ]);
  		$blog = Device::find( $id);
        $blog->update($request->all());
  
        return redirect()->action([DeviceCRUDController::class, 'index'])->with('success','Blog updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$blog = Device::find($id);
        $blog->delete();
  
       
        return redirect()->action([DeviceCRUDController::class, 'index'])->with('success','Blogs deleted successfully');
    }



}
