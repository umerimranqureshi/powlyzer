<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class ADMINDeviceCRUDController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Device::latest()->paginate(5);
  
        return view('admin.deviceCRUD.index',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deviceCRUD.create');
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
            'model' => 'required',
            
            'Installed' => 'required',
            'vendor_id' => 'required',
            'firebase_id' => 'required',
            
        ]);
  
        Device::create($request->all());
   
       
                        
        return redirect()->action([ADMINDeviceCRUDController::class, 'index'])->with('success','Blog created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$blog = Device::where('id', $id)->get();
    	error_log($blog);
        return view('admin.deviceCRUD.show', ['blog'=> $blog]);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        return view('admin.deviceCRUD.edit',['id'=>$id, 'name'=>$name, 'description'=> $description, 'model'=>$model, 'installed'=>$installed, 'vendor_id'=>$vendor_id, 'firebase_id'=>$firebase_id, 'status'=>$status,]);
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
            'model' => 'required',
           
            'Installed' => 'required',
            'vendor_id' => 'required',
            'firebase_id' => 'required',
            
        ]);
  		$blog = Device::find( $id);
        $blog->update($request->all());
  
        return redirect()->action([ADMINDeviceCRUDController::class, 'index'])->with('success','Blog updated successfully');
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
  
       
        return redirect()->action([ADMINDeviceCRUDController::class, 'index'])->with('success','Blogs deleted successfully');
    }
}
