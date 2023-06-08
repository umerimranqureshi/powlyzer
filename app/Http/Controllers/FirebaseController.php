<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

use App\Models\On_minute_firebase;
use App\Models\On_hour_firebase;
use App\Models\On_daily_firebase;

use App\Models\On_minute_firebase_wapda;
use App\Models\On_hour_firebase_wapda;
use App\Models\On_daily_firebase_wapda;

use App\Models\Daily_Production;
use App\Models\Daily_Consumption;

use App\Http\Controllers\FullCalenderController;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;


use App\Models\Device;

require 'C:\Users\Umer\Documents\laravel\powlyzer\vendor\autoload.php';




class FirebaseController extends Controller
{



//    public function __construct(Database $database)
//     {
//         $database = app('firebase.database');

// // Return an instance of the Auth component for the default Firebase project
// $defaultAuth = Firebase::auth();
// // Return an instance of the Auth component for a specific Firebase project
// $appAuth = Firebase::project('app')->auth();
// $anotherAppAuth = Firebase::project('another-app')->auth();

//     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function on_minute_firebase(){
        $on_time_firebase = "on_minute_firebase";
        $this->get_firebase_Solar($on_time_firebase);
        print_r("Solar Minute Values Saved ");  
   }
    public function on_hour_firebase(){
        $on_time_firebase =  "on_hour_firebase";
        $this->get_firebase_Solar($on_time_firebase);
        print_r("Solar Hour Values Saved ");
   }
    public function on_daily_firebase(){
        $on_time_firebase = "on_daily_firebase";
        $this->get_firebase_Solar($on_time_firebase);
        print_r("Solar Daily Values Saved ");
   }




    public function on_minute_firebase_wapda(){
        $on_time_firebase = "on_minute_firebase_wapda";
        $this->get_firebase_wapda($on_time_firebase);
        print_r("Wapda Minute Values Saved ");
   }
    public function on_hour_firebase_wapda(){
        $on_time_firebase = "on_hour_firebase_wapda";
        $this->get_firebase_wapda($on_time_firebase);
        print_r("Wapda Hour Values Saved ");
   }
    public function on_daily_firebase_wapda(){
        $on_time_firebase = "on_daily_firebase_wapda";
        $this->get_firebase_wapda($on_time_firebase);
        print_r("Wapda Daily Values Saved ");
   }


//
    public function get_firebase_wapda($on_time_firebase) {
        
   
        $firebase_ids = Device::select('firebase_id', 'status')->get();

                    $firebase = (new Factory)
                    ->withServiceAccount(__DIR__.'/firebaseKey.json')
                    ->withDatabaseUri('https://test-2191b-default-rtdb.firebaseio.com/');

                    $database = $firebase->createDatabase();



        foreach ($firebase_ids as $id) 
        {
            if ($id->status == 1) 
            {
                                             # code...
                                                                    
                    

                    $firebase_id = sprintf("%04s", $id->firebase_id); //0001, 0002, 0032
                    print_r("get Wapda ".$firebase_id);
                   
                    $reference = $database->getReference($firebase_id.'/dataWAPDA/');
                    $snapshot = $reference->getSnapshot();
                    $value = $snapshot->getValue();
                    $this->store($value, $firebase_id, $on_time_firebase );
        
                    //$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-

                    //$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-


                    //$newPost->getChild('title')->set('Changed post title');

                    //$newPost->getValue(); // Fetches the data from the realtime database

                    //$newPost->remove();
            }

         }
    }

    public function get_firebase_Solar($on_time_firebase ) {
        
   
        $firebase_ids = Device::select('firebase_id', 'status')->get();



                    $firebase = (new Factory)
                    ->withServiceAccount(__DIR__.'/firebaseKey.json')
                    ->withDatabaseUri('https://test-2191b-default-rtdb.firebaseio.com/');

                    $database = $firebase->createDatabase();

            foreach ($firebase_ids as $id) 
            {
                if ($id->status == 1) 
                {
                                                 # code...
                                                                       
                    

                    $firebase_id = sprintf("%04s", $id->firebase_id); //0001, 0002, 0032
                    print_r("get Solar ".$firebase_id);
                   
                    $reference = $database->getReference($firebase_id.'/data/');
                    $snapshot = $reference->getSnapshot();
                    $value = $snapshot->getValue();



                    $this->store($value, $firebase_id, $on_time_firebase );
                }

            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($value, $firebase_id, $on_time_firebase )
    {

        if ($on_time_firebase == "on_minute_firebase") {
            $on_time_firebase_obj = new On_minute_firebase;
        }
        elseif ($on_time_firebase == "on_hour_firebase") {
            $on_time_firebase_obj = new On_hour_firebase;
        }
        elseif ($on_time_firebase == "on_daily_firebase") {
            $on_time_firebase_obj = new On_daily_firebase;
        }
        elseif ($on_time_firebase == "on_minute_firebase_wapda") {
            $on_time_firebase_obj = new On_minute_firebase_wapda;
        }
        elseif ($on_time_firebase == "on_hour_firebase_wapda") {
            $on_time_firebase_obj = new On_hour_firebase_wapda;
        }
        elseif ($on_time_firebase == "on_daily_firebase_wapda") {
            $on_time_firebase_obj = new On_daily_firebase_wapda;
        }
        


        $Active_Energy_Total = $value['Active Energy Total'];
        $Active_Power =  $value['Active Power'];
        $Apparent_Power =  $value['Apparent Power'];
        $Reactive_Power =  $value['Reactive Power'];
        $Total_Power_Factor = $value['Total Power Factor'];
        $currentA =  $value['currentA'];
        $currentB =  $value['currentB'];
        $currentC =  $value['currentC'];
        $voltageA =  $value['voltageA'];
        $voltageB =  $value['voltageB'];
        $voltageC =  $value['voltageC'];

                         // print("<pre>".print_r($value,true)."</pre>");

                    print_r("<br>");
        // $on_time_firebase = new On_minute_firebase;


        $on_time_firebase_obj->firebase_id = $firebase_id;
        $on_time_firebase_obj->currentA = $currentA;
        $on_time_firebase_obj->currentB = $currentB;
        $on_time_firebase_obj->currentC = $currentC;
        $on_time_firebase_obj->voltageA = $voltageA;
        $on_time_firebase_obj->voltageB = $voltageB;
        $on_time_firebase_obj->voltageC = $voltageC;
        $on_time_firebase_obj->active_energy = $Active_Energy_Total;
        $on_time_firebase_obj->total_power_factor = $Total_Power_Factor;
        $on_time_firebase_obj->active = $Active_Power;
        $on_time_firebase_obj->reactive = $Reactive_Power;
        $on_time_firebase_obj->apparent = $Apparent_Power;
        $on_time_firebase_obj->frequency = 0;
        $on_time_firebase_obj->power_factor = 0;

        $on_time_firebase_obj->save();
                  
    }




    public function production($manageEvent)
    {
         $firebase_ids = Device::select('firebase_id', 'status')->get();



                    $firebase = (new Factory)
                    ->withServiceAccount(__DIR__.'/firebaseKey.json')
                    ->withDatabaseUri('https://test-2191b-default-rtdb.firebaseio.com/');

                    $database = $firebase->createDatabase();

            foreach ($firebase_ids as $id) 
            {                             
                if ($id->status == 1) 
                {
                        # code...
                       


                    $firebase_id = sprintf("%04s", $id->firebase_id); //0001, 0002, 0032
                    print_r($firebase_id);
                   
                    $reference = $database->getReference($firebase_id.'/data/');
                    $snapshot = $reference->getSnapshot();
                    $value = $snapshot->getValue();

                    $Active_Energy_Total = $value['Active Energy Total'];


                    $device_ids = Device::select('id', 'status')->where('firebase_id',  $firebase_id)->get();
                    foreach ($device_ids as $device_id) 
                    {
                        if ($device_id->status == 1) 
                        {
                            print_r($device_id->status);
                               # code...
                           
                         // print("<pre>".print_r($device_id->id,true)."</pre>");
                    
                            // $device_id = 1;
                            // print_r($device_id);
                            // var_dump($device_id);
                           
                            if (DB::table('daily_productions')->where("device_id", "=", $device_id->id)->latest('id')->first() == NULL) {
                                $previous_current = 0.0;
                            }
                            else
                            {
                                $previous_current_obj = DB::table('daily_productions')->select('current')->where("device_id", "=", $device_id->id)->latest('id')->first();
                                $previous_current = $previous_current_obj->current;
                            }

                            $production = $Active_Energy_Total-$previous_current;
                            
                            $daily_prduction = new Daily_Production;

                            $daily_prduction->device_id = $device_id->id;
                            $daily_prduction->previous = $previous_current;
                            $daily_prduction->current = $Active_Energy_Total;
                            $daily_prduction->datetime = date("Y-m-d");
                            $daily_prduction->production = $production;

                            $daily_prduction->save();

                            print_r("prouction saved"." ");
                             // print_r(" ".$device_id->id." ");
                             //  print_r(" ".$previous_current." ");
                             //   print_r(" ".$Active_Energy_Total." ");
                             //    print_r(" ".date("Y-m-d")." ");
                             //    print_r(" ".gettype($Active_Energy_Total)." ");
                             //    print_r(" ".gettype($previous_current)." ");

                                 // print_r(" ".$production);


                            if ($manageEvent == "yes") {
                                
                                $currentDateTime = Carbon::now();
                                $newDateTime = Carbon::now()->addHour();
                                     // print_r($currentDateTime->toDateTimeString() );
                                     // print_r($newDateTime->toDateTimeString());
                                $type = " produced";

                                $event = new FullCalenderController;
                                $event->add($device_id->id, $production, $type,  $currentDateTime->toDateTimeString(), $newDateTime->toDateTimeString());
                            }
                        }
                    }
                } 

            }
    }


    public function consumption($manageEvent)
    {
        $firebase_ids = Device::select('firebase_id', 'status')->get();

         $firebase = (new Factory)
         ->withServiceAccount(__DIR__.'/firebaseKey.json')
         ->withDatabaseUri('https://test-2191b-default-rtdb.firebaseio.com/');

        $database = $firebase->createDatabase();
        foreach ($firebase_ids as $id) 
        { 
                if ($id->status == 1) 
                {                            
                    


                    $firebase_id = sprintf("%04s", $id->firebase_id); //0001, 0002, 0032
                    print_r($firebase_id);
                   
                    $reference = $database->getReference($firebase_id.'/dataWAPDA/');
                    $snapshot = $reference->getSnapshot();
                    $value = $snapshot->getValue();

                    $Active_Energy_Total = $value['Active Energy Total'];


                    $device_ids = Device::select('id')->where('firebase_id',  $firebase_id)->get();
                    foreach ($device_ids as $device_id) 
                    {
                        if ($device_id->status == 1) 
                        {
                            # code...
                        
                         // print("<pre>".print_r($device_id->id,true)."</pre>");
                    
                            // $device_id = 1;
                            // print_r($device_id);
                            // var_dump($device_id);
                           
                            if (DB::table('daily_consumptions')->where("device_id", "=", $device_id->id)->latest('id')->first() == NULL) {
                                $previous_current = 0.0;
                            }
                            else
                            {
                                $previous_current_obj = DB::table('daily_consumptions')->select('current')->where("device_id", "=", $device_id->id)->latest('id')->first();
                                $previous_current = $previous_current_obj->current;
                            }

                            $consumption = $Active_Energy_Total-$previous_current;
                            
                            $daily_consumption = new Daily_Consumption;

                            $daily_consumption->device_id = $device_id->id;
                            $daily_consumption->previous = $previous_current;
                            $daily_consumption->current = $Active_Energy_Total;
                            $daily_consumption->datetime = date("Y-m-d");
                            $daily_consumption->consumption = $consumption;

                            $daily_consumption->save();

                            print_r("consumption saved"." ");
                             // print_r(" ".$device_id->id." ");
                             //  print_r(" ".$previous_current." ");
                             //   print_r(" ".$Active_Energy_Total." ");
                             //    print_r(" ".date("Y-m-d")." ");
                             //    print_r(" ".gettype($Active_Energy_Total)." ");
                             //    print_r(" ".gettype($previous_current)." ");

                                 // print_r(" ".$consumption);


                            if ($manageEvent == "yes") {
                                
                                $currentDateTime = Carbon::now();
                                $newDateTime = Carbon::now()->addHour();
                                     // print_r($currentDateTime->toDateTimeString() );
                                     // print_r($newDateTime->toDateTimeString());
                                $type =  " consumed";

                                $event = new FullCalenderController;
                                $event->add($device_id->id, $consumption, $type, $currentDateTime->toDateTimeString(), $newDateTime->toDateTimeString());
                            }
                        }
                    }
                }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $database->getReference('posts')->remove();
    }

    
}
