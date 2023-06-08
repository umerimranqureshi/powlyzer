<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Notifications\NewUserNotification;

// use App\Http\Controllers\ProductController;
// Route::resource('/products', ProductController::class);


use App\Http\Controllers\DeviceCRUDController;

Route::resource('/vendor/devices', DeviceCRUDController::class);
Route::get('/vendor/devices',  [DeviceCRUDController::class,'index']);

Route::get('/vendor/devices/create',  [DeviceCRUDController::class,'create']);

Route::post('/vendor/devices/store',  [DeviceCRUDController::class,'store']);

Route::get('/vendor/devices/show/{id}',  [DeviceCRUDController::class,'show']);

Route::get('/vendor/devices/edit/{id}',  [DeviceCRUDController::class,'edit']);

Route::post('/vendor/devices/destroy/{id}',  [DeviceCRUDController::class,'destroy']);

Route::post('/vendor/devices/update/{id}',  [DeviceCRUDController::class,'update']);



use App\Http\Controllers\CustomerCRUDController;

Route::resource('/vendor/customers', CustomerCRUDController::class);
Route::get('/vendor/customers',  [CustomerCRUDController::class,'index']);

Route::get('/vendor/customers/create',  [CustomerCRUDController::class,'create']);

Route::post('/vendor/customers/store',  [CustomerCRUDController::class,'store']);

Route::get('/vendor/customers/show/{id}',  [CustomerCRUDController::class,'show']);

Route::get('/vendor/customers/edit/{id}',  [CustomerCRUDController::class,'edit']);

Route::post('/vendor/customers/destroy/{id}',  [CustomerCRUDController::class,'destroy']);

Route::post('/vendor/customers/update/{id}',  [CustomerCRUDController::class,'update']);


Route::get('/vendor/customers/invoices/{id}',  [CustomerCRUDController::class,'invoice']);

Route::get('/vendor/customers/invoice/create/{client_id}/{vendor_id}',  [CustomerCRUDController::class,'invoiceCreate']);

Route::post('/vendor/customers/invoice/store',  [CustomerCRUDController::class,'invoiceStore']);

Route::get('/vendor/customers/invoice/edit/{id}',  [CustomerCRUDController::class,'invoiceEdit']);

Route::post('/vendor/customers/invoice/destroy/{id}',  [CustomerCRUDController::class,'invoiceDestroy']);

Route::post('/vendor/customers/invoice/update/{id}',  [CustomerCRUDController::class,'invoiceUpdate']);



use App\Http\Controllers\ADMINDeviceCRUDController;

Route::resource('/admin/devices', ADMINDeviceCRUDController::class);
Route::get('/admin/devices',  [ADMINDeviceCRUDController::class,'index']);

Route::get('/admin/devices/create',  [ADMINDeviceCRUDController::class,'create']);

Route::post('/admin/devices/store',  [ADMINDeviceCRUDController::class,'store']);

Route::get('/admin/devices/show/{id}',  [ADMINDeviceCRUDController::class,'show']);

Route::get('/admin/devices/edit/{id}',  [ADMINDeviceCRUDController::class,'edit']);

Route::post('/admin/devices/destroy/{id}',  [ADMINDeviceCRUDController::class,'destroy']);

Route::post('/admin/devices/update/{id}',  [ADMINDeviceCRUDController::class,'update']);



use App\Http\Controllers\ADMINCustomerCRUDController;

Route::resource('/admin/customers', ADMINCustomerCRUDController::class);
Route::get('/admin/customers',  [ADMINCustomerCRUDController::class,'index']);

Route::get('/admin/customers/create/{id}',  [ADMINCustomerCRUDController::class,'create']);

Route::post('/admin/customers/store',  [ADMINCustomerCRUDController::class,'store']);

Route::get('/admin/customers/show/{id}',  [ADMINCustomerCRUDController::class,'show']);

Route::get('/admin/customers/edit/{id}',  [ADMINCustomerCRUDController::class,'edit']);

Route::post('/admin/customers/destroy/{id}',  [ADMINCustomerCRUDController::class,'destroy']);

Route::post('/admin/customers/update/{id}',  [ADMINCustomerCRUDController::class,'update']);



use App\Http\Controllers\ADMINVendorCRUDController;

Route::resource('/admin/vendors', ADMINVendorCRUDController::class);
Route::get('/admin/vendors',  [ADMINVendorCRUDController::class,'index']);

Route::get('/admin/vendors/create/{id}',  [ADMINVendorCRUDController::class,'create']);

Route::post('/admin/vendors/store',  [ADMINVendorCRUDController::class,'store']);

Route::get('/admin/vendors/show/{id}',  [ADMINVendorCRUDController::class,'show']);

Route::get('/admin/vendors/edit/{id}',  [ADMINVendorCRUDController::class,'edit']);

Route::post('/admin/vendors/destroy/{id}',  [ADMINVendorCRUDController::class,'destroy']);

Route::post('/admin/vendors/update/{id}',  [ADMINVendorCRUDController::class,'update']);

Route::get('/admin/vendors/invoices/{id}',  [ADMINVendorCRUDController::class,'invoice']);

Route::get('/admin/vendors/invoice/create/{client_id}/{vendor_id}',  [CustomerCRUDController::class,'invoiceCreate']);

Route::post('/admin/vendors/invoice/store',  [ADMINVendorCRUDController::class,'invoiceStore']);

Route::get('/admin/vendors/invoice/edit/{id}',  [ADMINVendorCRUDController::class,'invoiceEdit']);

Route::post('/admin/vendors/invoice/destroy/{id}',  [ADMINVendorCRUDController::class,'invoiceDestroy']);

Route::post('/admin/vendors/invoice/update/{id}',  [ADMINVendorCRUDController::class,'invoiceUpdate']);





//route for firebase values store in sql
Route::get('/phpfirebase_sdk','FirebaseController@production');



//Route::get('users', 'UserController@index');
Route::get('/changeStatus', 'AdminController@changeStatus');



Route::post('/getlocation' , 'ClientController@saveJson');


// Route::post('/session/storeValue/{value}', 'ClientController@storeValue($role)');

Route::get('clientindex', function(){
    return view('client/index');
});





Route::get('full-calender', 'FullCalenderController@index');

Route::post('full-calender/action', 'FullCalenderController@action');




// Route::get('/calender', [CalenderController::class, 'calender']);
// Route::post('/calenderAjax', [CalenderController::class, 'ajax']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#log routes
Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () { 
    return view('index');
});


Route::get('/log/login/{role}', function ($role) { 
    return view('log/login', ['role' => $role,]);
});


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::post('/register/storevendor', 'RegistrationController@storeVendor');


Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/log/indexadmin', 'LogController@indexAdmin');

Route::get('/log/indexvendor', 'LogController@indexVendor');

Route::get('/log/index', 'LogController@index');

// Route::get('/log/registervendor', 'LogController@registerVendor');
//Route::get('/log/loginadmin', 'LogController@loginAdmin');

//Route::get('/log/loginvendor', 'LogController@loginVendor');


//Route::get('/log/login', 'LogController@login');


Route::get('/log/notApproved', function () { 
    return view('log/notApproved');
});


Route::get('/log/login/log/register/{role}', 'LogController@registerClient');





#admin routes for clander
Route::get('/admin/homedash', 'AdminController@homedash' );

Route::get('/admin/vendor', 'AdminController@vendor');

Route::get('/admin/device', 'AdminController@device');

Route::get('/admin/invoice', 'AdminController@invoice' );

Route::get('/admin/calender', 'AdminController@calender' );

Route::get('/admin/customer', 'AdminController@customer');

Route::get('/admin/setting', 'AdminController@setting' );

Route::get('/admin/in', 'AdminController@in' );



Route::get('/admin/notification/markasread/client/{id}', 'AdminController@markasreadClient' );

Route::get('/admin/notification/markasread/vendor/{id}', 'AdminController@markasreadVendor' );

Route::get('/admin/notification/markasread/admin/{id}', 'AdminController@markasreadAdmin' );


#clients routes
Route::get('/client/index', function () {
    return view('client/index');
})->middleware('auth');

Route::get('/client/calender', 'ClientController@calender')->middleware('auth');

Route::get('/client/chome', 'ClientController@chome')->middleware('auth');

Route::get('/client/message', 'ClientController@message')->middleware('auth');

Route::get('/client/process', function () {
    return view('client/process');
})->middleware('auth');

Route::get('/client/invoice', 'ClientController@invoice')->middleware('auth');

Route::get('/client/realTimeBill', 'ClientController@realTimeBill')->middleware('auth');


Route::get('/client/analytics', 'ClientController@analytics')->middleware('auth');




#vendor routes

Route::get('/vendor/homedash', 'VendorController@homedash');

Route::get('/vendor/inbox', 'VendorController@inbox' );

Route::get('/vendor/device', 'VendorController@device');

Route::get('/vendor/invoice', 'VendorController@invoice' );

Route::get('/vendor/calender', 'VendorController@calender' );

Route::get('/vendor/customer', 'VendorController@customer');

Route::get('/vendor/setting', 'VendorController@setting' );

Route::get('/vendor/in', 'VendorController@in' );


Route::get('/vendor/index', function(){
    return view('vendor/index');
} );






//Notify Route
Route::get('/notify', function () {
   
    $user = User::find(1);

    $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is our example notification tutorial',
            'thanks' => 'Thank you for visiting codechief.org!',
    ];

    $user->notify(new \App\Notifications\NewUserNotification($details));

    return dd("Done");
});

Route::get('/markAsRead', function(){

	auth()->user()->unreadNotifications->markAsRead();

	return redirect()->back();

})->name('mark');