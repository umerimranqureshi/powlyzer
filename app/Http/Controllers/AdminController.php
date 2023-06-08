<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_detail;
use App\Models\Device;
use App\Models\Client_detail;
use App\Models\Vendor_detail;
use App\Notifications\NewUserNotification;
use App\Models\User;

use App\Http\Controllers\ADMINCustomerCRUDController;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function __construct(Request $request){
      $this->middleware('auth');
      //response is here in handler
      //C:\Users\Umer\Documents\laravel\powlyzer\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions


    }

    public function markasreadClient($notifiable_id)
    {
     $notifications = array();
        // dd($userSchema->notifications);
        $users = User::latest('id')->get();
        foreach ($users as $user) {
            array_push($notifications, $user->unreadNotifications);
        }

        $users = User::where('id', $notifiable_id)->get();
        foreach ($users as $user) {
          foreach ($user->unreadNotifications as $notification) 
          {
              $notification->markAsRead();
              $notifiable_id = $notification->notifiable_id;
               
          }
        }
                       // print_r($notifiable_id);
        return redirect('/admin/customers/create/'.$notifiable_id);
       
    }


    public function markasreadVendor($notifiable_id)
    {
     $notifications = array();
        // dd($userSchema->notifications);
        $users = User::latest('id')->get();
        foreach ($users as $user) {
            array_push($notifications, $user->unreadNotifications);
        }

        $users = User::where('id', $notifiable_id)->get();
        foreach ($users as $user) {
          foreach ($user->unreadNotifications as $notification) 
          {
              $notification->markAsRead();
              $notifiable_id = $notification->notifiable_id;
               
          }
        }
                       // print_r($notifiable_id);
        return redirect('/admin/vendors/create/'.$notifiable_id);
       
    }


    public function markasreadAdmin($notifiable_id)
    {
     $notifications = array();
        // dd($userSchema->notifications);
        $users = User::latest('id')->get();
        foreach ($users as $user) {
            array_push($notifications, $user->unreadNotifications);
        }

        $users = User::where('id', $notifiable_id)->get();
        foreach ($users as $user) {
          foreach ($user->unreadNotifications as $notification) 
          {
              // $notification->markAsRead();
              $notifiable_id = $notification->notifiable_id;
               
          }
        }
                       // print_r($notifiable_id);
        return redirect('/admin/customers/create/'.$notifiable_id);
       
    }

    public function homedash() {
       $notifications = array();
        // dd($userSchema->notifications);
        $users = User::latest('id')->get();
        foreach ($users as $user) {
            // $notifications = $user->unreadNotifications;
            array_push($notifications, $user->unreadNotifications);
            foreach ($user->notifications as $notification) {
                // print_r($notification->data) ;
            }

            foreach ($user->unreadNotifications as $notification) {
                // print_r($notification->data) ;
                // $notification->markAsRead();
            }

        }
      // print_r($notifications->) ;

      $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);

        return view('admin/homedash', ['notifications'=>$notifications, 'totalDevices'=> $totalDevices, 'activeClients'=>$activeClients, 'totalVendors'=>$totalVendors, ]);

    }


    public function invoice() {

       $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);

        return view('admin/invoice' , ['totalDevices'=> $totalDevices, 'activeClients'=>$activeClients, 'totalVendors'=>$totalVendors, ]);
    }

    public function calender() {

       $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);

        return view('admin/calender' , ['totalDevices'=> $totalDevices, 'activeClients'=>$activeClients, 'totalVendors'=>$totalVendors, ]);
    }

    public function setting() {

       $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);

        return view('admin/setting' , ['totalDevices'=> $totalDevices, 'activeClients'=>$activeClients, 'totalVendors'=>$totalVendors, ]);
    }
    
    public function in() {

       $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);

        return view('admin/in' , ['totalDevices'=> $totalDevices, 'activeClients'=>$activeClients, 'totalVendors'=>$totalVendors, ]);
    }


	public function vendor(){

     $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);


		$vendorDetails = Vendor_detail::get();
        return view('admin/vendor',[ 'vendorDetails' => $vendorDetails, 'totalDevices'=> $totalDevices, 'activeClients'=>$activeClients, 'totalVendors'=>$totalVendors, ]);
		// $vendorDetails = Admin::all();
		// return view('admin/vendor', [ 'vendorDetails' => $vendorDetails, ]);
	}

	public function device(){

     $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);
		$devices = Device::all();
		return view('admin/device', [ 'devices' => $devices, 'totalDevices'=> $totalDevices, 'activeClients'=>$activeClients, 'totalVendors'=>$totalVendors, ]);

	}

	public function customer(){

     $clients= Client_detail::where('status',1)->get();
      $activeClients = count($clients);
      // print_r($activeClients);

      $devices = Device::where('status', 1)->get();
      $totalDevices = count($devices);
      // print_r($totalDevices);

      $vendors = Vendor_detail::where('status', 1)->get();
      $totalVendors = count($vendors);
      // print_r($totalVendors);

		
    	$clients = Client_detail::all();

    	return view('admin/customer', [ 'clients' => $clients,  'totalDevices'=> $totalDevices, 'activeClients'=>$activeClients, 'totalVendors'=>$totalVendors, ]);
    }


        /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor_detail::get();
        return view('admin/vendor',compact('vendors'));
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        $vendor = Vendor_detail::find($request->vendor_id);
        $vendor->status = $request->status;
        $vendor->save();
        error_log($vendor);
        error_log("message");

        return response()->json(['success'=>'Status change successfully.']);
    }
    
}
