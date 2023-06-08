<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\FirebaseController;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class on_minute_firebase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'firebase:minute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store firebase values on SQL every Minute';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

         // DB::table('real_parameter_values')->delete();
        // FirebaseController::class,'index';

        $email = User::where("id",'=','1')->get('email');
        
        echo "operation done for ".$email;
    }
}
