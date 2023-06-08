<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Daily_Production;
use App\Models\Client_detail;



class FullCalenderController extends Controller
{
   public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->where('user_id', '=', session('id'))
                       ->get(['id', 'title', 'start', 'end', 'color']);

                       // error_log($data);
            return response()->json($data);
    	}
    	return view('full-calender');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		    	error_log($request->type);

            if($request->title <= "150")
            {
                $color = "#ff6661";
            }
            elseif ($request->title <= "200") {
                $color = "#ffdd61";
            }
            else
            {
                $color = "#6cff61";
            }

    		if($request->type == 'add')
    		{

    			$event = Event::create([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end,
    				'user_id'	=>	session('id'),
                    'color'     =>  $color
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
                    if($request->title <= "150")
                    {
                        $color = "#ff6661";
                    }
                    elseif ($request->title <= "200") {
                        $color = "#ffdd61";
                    }
                    else
                    {
                        $color = "#6cff61";
                    }

    			$event = Event::find($request->id)->update([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end,
    				'user_id'	=>	session('id'),
                    'color'     =>  $color
                    
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = Event::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }


    public function insert_values()
    {
        
    }

    public function getValue()
    {
        
    }

    public function add($device_id, $value, $type, $start, $end)
    {   
        // $title, $start, $end
        // $title = "200";

        // $start = date("Y-m-d", time());
        // $end = date("Y-m-d", time());
        $title = $value. $type;

        $user = Client_detail::where("device_id", "=", $device_id)->get("user_id")->first();
        // print_r("user_id is: ". $user->user_id);
            if($title <= "150")
            {
                $color = "#ff6661";
            }
            elseif ($title <= "200") {
                $color = "#ffdd61";
            }
            else
            {
                $color = "#6cff61";
            }

            
                $event = Event::create([
                    'title'     =>  $title,
                    'start'     =>  $start,
                    'end'       =>  $end,
                    'user_id'   =>  $user->user_id,
                    'color'     =>  $color
                ]);
                print_r("EVENT saved");
    }

}
