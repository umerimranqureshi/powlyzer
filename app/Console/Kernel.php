<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Controllers\FirebaseController;

use App\Http\Controllers\FullCalenderController;

use Kreait\Firebase\Database;

use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{



    
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // 'App\Console\Commands\on_minute_firebase',
        // Commands\on_minute_firebase::class,

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        
        // $schedule->call('App\Http\Controllers\FirebaseController@index')->everyMinute();
        // $schedule->command('firebase:minute')->everyMinute();


//on minute firebase
        $obj = new FirebaseController();
        $schedule->call(function () use ($obj) {
            $obj->on_minute_firebase(); //call method
        })->everyMinute();


//on hour firebase
        $obj1 = new FirebaseController();
        $schedule->call(function () use ($obj1) {
            $obj1->on_hour_firebase(); //call method
        })->hourly();

//on daily firebase  
        $obj2 = new FirebaseController();
        $schedule->call(function () use ($obj2) {
            $obj2->on_daily_firebase(); //call method
        })->dailyAt("13:00");





//on minute firebase WAPDA
        $obj3 = new FirebaseController();
        $schedule->call(function () use ($obj3) {
            $obj3->on_minute_firebase_wapda(); //call method
        })->everyMinute();


//on hour firebase WAPDA
        $obj4 = new FirebaseController();
        $schedule->call(function () use ($obj4) {
            $obj4->on_hour_firebase_wapda(); //call method
        })->hourly();

//on daily firebase  WAPDA 
        $obj5 = new FirebaseController();
        $schedule->call(function () use ($obj5) {
            $obj5->on_daily_firebase_wapda(); //call method
        })->dailyAt("13:00");

// delete table
        $schedule->call(function () {
            DB::table('on_minute_firebase')->delete();
            DB::table('on_minute_firebase_wapda')->delete();

            print_r("deleted successfully on minute values");

        })->dailyAt("20:00");

        $schedule->call(function () {
            DB::table('on_hour_firebase')->delete();

            print_r("deleted successfully on hourly values");

            DB::table('on_hour_firebase_wapda')->delete();
        })->monthly();



        // //add event in calender
        // $event = new FullCalenderController();
        // $schedule->call(function(){
        //     $event->add();
        // });


//production
        $obj6 = new FirebaseController();
        $schedule->call(function () use ($obj6) {
            $obj6->production("no"); //call method
        })->everyTenMinutes();


        //production with event management
        $obj7 = new FirebaseController();
        $schedule->call(function () use ($obj7) {
            $obj7->production("yes"); //call method
        })->hourly();

    



//consumption
        $obj8 = new FirebaseController();
        $schedule->call(function () use ($obj8) {
            $obj8->consumption("no"); //call method
        })->everyTenMinutes();


        //consumption with event management
        $obj9 = new FirebaseController();
        $schedule->call(function () use ($obj9) {
            $obj9->consumption("yes"); //call method
        })->hourly();

     }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
