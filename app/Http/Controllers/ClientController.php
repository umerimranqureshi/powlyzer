<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Client_detail;
use App\Models\Vendor_detail;
use App\Models\User;
use App\Models\Parameter;
use App\Models\Real_parameter_value;
use App\Models\Device_parameter;
use App\Models\Device;
use App\Models\Event;
// use App\Http\Controllers\Redirect;

use App\Models\On_daily_firebase_wapda;
use App\Models\On_minute_firebase_wapda;
use App\Models\On_minute_firebase;
use App\Models\Daily_Production;
use App\Models\Daily_Consumption;

use App\Models\Invoice;





use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use Cmfcmf\OpenWeatherMap\Util\Unit;

// If you are not using a PHP framework that has included Composer's autoloader for you,
// you'll need to `require` the autoloader script before working with this API:
require 'C:\Users\Umer\Documents\laravel\powlyzer\vendor\autoload.php';



class ClientController extends Controller
{




    public function __construct(Request $request){
      $this->middleware('auth');
      //response is here in handler
      //C:\Users\Umer\Documents\laravel\powlyzer\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions


    }



    protected function get_device_id(){
        $user_id = session('id');
      $device_ids = Client_detail::where('user_id', '=', $user_id)->get('device_id');
      foreach ($device_ids as $id ) {
        $device_id = $id->device_id;
      }
      if (isset($device_id)) {
        session(['device_id' => $device_id]);
        return $device_id;
      }
      else{
        abort(404,'Page not found.');
      }
      
    }


    protected function get_firebase_id(){

          $device_id = $this->get_device_id();

           // error_log($device_id);    
           $firebase_ids = Device::where('id' , '=', $device_id)->get('firebase_id');

           foreach ($firebase_ids as $id ) {
            $firebase_id = $id->firebase_id;
            error_log($firebase_id);
          }
          //get total 4 digit like 0001, 0012 etc
        $firebase = sprintf("%04s", $firebase_id);

        if (isset($firebase)) {
             session(['firebase_id' => $firebase]);
             return $firebase;
        } 
        else{
            abort(404,'Page not found.');
        }  
        
    }

  public function firebaseActive()
  {
    $this->get_firebase_id();
    $energy = On_minute_firebase::where('firebase_id', session('firebase_id'))->latest()->first();
    return $energy->active;
  }
  public function firebaseActiveWapda()
  {
    $this->get_firebase_id();
    $energy = On_minute_firebase_wapda::where('firebase_id', session('firebase_id'))->latest()->first();
    return $energy->active;
  }





    public function chome(){
    	
      $this->get_firebase_id();

      $active = $this->firebaseActive();
      $active_wapda = $this->firebaseActiveWapda();



    function WeatherUrl($url){
        $cn = curl_init();
        curl_setopt($cn, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cn, CURLOPT_URL, $url);    // get the contents using url
        $weatherdata = curl_exec($cn);


         // execute the curl request
        curl_close($cn); //close the cURL
        return $weatherdata;
    }
    $url="http://api.openweathermap.org/data/2.5/weather?lat=31.5204&lon=74.3587&appid=c703c151b4353f2933b11fa0848a0ac2";
    // q=Lahore,PK,IN&units=metric&appid=c703c151b4353f2933b11fa0848a0ac2
    // api.openweathermap.org/data/2.5/find?lat={lat}&lon={lon}&cnt={cnt}&appid={API key}


    $response=WeatherUrl($url);



    $data = json_decode($response);
  
     $currentTime = time();

      $UV =  1;
      $visibility=$data->visibility;
    $name = $data->name;
    $day = date("l g:i a", $currentTime);
    $date = date("jS F, Y",$currentTime);
    $description = ucwords($data->weather[0]->description);
    $temp_max = $data->main->temp_max;
    $temp_min =  $data->main->temp_min;
    $humidity = $data->main->humidity;
    $speed = $data->wind->speed;
    $icon = $data->weather[0]->icon;




$dataPoints1 = array();
$dataPoints2 = array();
//Best practice is to create a separate file for handling connection to database

 $device_id =  session('device_id');
    $production = Daily_Production::select('updated_at','production')->where('device_id',"=", $device_id )->orderByDesc('updated_at')->get();
    $consumption = Daily_Consumption::select('updated_at','consumption')->where('device_id',"=", $device_id)->orderByDesc('updated_at')->get();  
    
    // Date($pro->updated_at->format('Y, m, d'))
    foreach($production as $pro){
        array_push($dataPoints1, array("x"=> 0, "y"=> $pro->production));
    }
    // Date($con->updated_at->format('Y, m, d'))
    foreach($consumption as $con){
        array_push($dataPoints2, array("x"=> 0, "y"=> $con->consumption));
    }

// foreach ($consumption as $key) {

// echo($key->datetime);
//   echo($key->consumption);
// }

// print_r(json_encode($dataPoints2, JSON_NUMERIC_CHECK));
    // $dataPoints2 = json_encode($dataPoints2, JSON_NUMERIC_CHECK);
    // $dataPoints1 = json_encode($dataPoints1, JSON_NUMERIC_CHECK);



    return view('client/chome', ['name'=>$name, 'day'=>$day, 'date'=>$date, 'description'=>$description, 'temp_max'=> $temp_max, 'temp_min'=>$temp_min, 'humidity'=>$humidity, 'speed'=>$speed, 'icon'=>$icon, 'UV'=>$UV, 'visibility'=>$visibility, 'data1'=> $dataPoints1, 'data2'=>$dataPoints2, 'active'=>$active, 'active_wapda'=>$active_wapda, ]);
            


    }




    public function analytics(){

      $this->get_firebase_id();
      $device_id = $this->get_device_id();
      // error_log($device_id);
    	$device_parameters = Device_parameter::where('device_id', '=', $device_id)->get('real_parameter_id');
    	$real_parameter_values = Real_parameter_value::all();
    	$parameters  = Parameter::all();


		$data = Device_parameter::join('real_parameter_values', 'real_parameter_values.id', '=', 'device_parameters.real_parameter_id')->join('parameters', 'parameters.id', '=', 'real_parameter_values.parameter_id')->get(['device_parameters.device_id', 'parameters.name', 'parameters.EU', 'real_parameter_values.value']);
$PF = 0;
$amp = 0;
$ampA = 0;
$ampB =0;
$volt =0;
$voltA =0;
$voltB =0;
     
    foreach ($data as $dat) {
    	if ($dat->name == 'power_factor'){
    		$PF = $dat->value;
    	}
    	elseif ($dat->name == 'currentA'){
    		$amp = $dat->value;
    	}
    	elseif ($dat->name == 'currentB'){
    		$ampA = $dat->value;
    	}
    	elseif ($dat->name == 'currentC'){
    		$ampB = $dat->value;
    	}
    	elseif ($dat->name == 'voltageA'){
    		$volt = $dat->value;
    	}
    	elseif ($dat->name == 'voltageB'){
    		$voltA = $dat->value;
    	}
    	elseif ($dat->name == 'voltageC'){
    		$voltB = $dat->value;
    	}
    }

			//Calculate Power(Watts)
			$Watts= $PF* $amp * $volt;

			//For 3 phase meter line to line
			//pf IS POWER FACTOR

			$LLWatts= sqrt(3) * $PF * $ampA * $voltA;

			//For 3 phase meter line to neutral
			$LNWatts= 3 * $PF * $ampB * $voltB;

			$TotalWatts= $Watts + $LLWatts + $LNWatts;
			//Calculate kilwatt per hour

			$kWh= $TotalWatts * 100 * 0.00028 ;

			//Solar production
			$SolarWatts= $PF* $amp * $volt;
			$SolarkWh= $SolarWatts * 100 * 0.00028 ;

			$Consumption=   $kWh - $SolarkWh;

      
//forcast

       $httpRequestFactory = new RequestFactory();
      $httpClient = GuzzleAdapter::createWithConfig([]);

      $owm = new OpenWeatherMap('c703c151b4353f2933b11fa0848a0ac2', $httpClient, $httpRequestFactory);

      $forecast = $owm->getForecastUVIndex(52.520008, 13.404954, $cnt = 8);





    	return view('client/analytics' , [ 'data' => $data, "production" => $SolarkWh, 'consumption' => $Consumption, 'forecast' => $forecast, ]);
    }

    



    public function invoice(){

      $this->get_firebase_id();



      $invoices = Invoice::where('user_id_receiver', session('id'))->get();

      foreach ($invoices as $invoice) {
        $vendor_id =  $invoice->user_id_generater;
        $product_name = $invoice->product_name;
        $quantity = $invoice->quantity;
        $rate = $invoice->rate;
        $created_at = $invoice->created_at;

      }

       $vendors = Vendor_detail::where('user_id', $vendor_id)->get();

       $users = User::where('id', $vendor_id)->get();



		return view('client/invoice', ['invoices'=>$invoices, 'created_at'=>$created_at, 'vendors'=>$vendors, 'users'=>$users, ]);
            


    }

    public function realTimeBill()
    {
       $this->get_firebase_id();
      
      // $wapda = On_daily_firebase_wapda::where('firebase_id', session('device_id'))->where('created_at','>=', '2021-07-24 00:00:00')->first();
      // echo $wapda->created_at;
      // $watt = $wapda->active_energy;

      // double $unit, $watt,$kilowatt,$hour,$min, $sec, $baseprice, $incrementprice,$dincrementprice,$totalprice,$initialprice,$subsidized;
      $watt = mt_rand(250000,800000);
// echo $watt."<br>";
      $kilowatt=$watt/1000;
      $hour=1;

      $unit=$kilowatt*$hour;

      $baseprice=12.5;
      $incrementprice=19.5;
      $dincrementprice=22.5;

// echo $unit;

      if($unit<300)
      {
        $initialprice=$unit*$baseprice;
        $nonsubsidized=0;
        $subsidized=$unit;
        $totalprice=0;
        $finalprice = $initialprice + 0;
      }

      elseif($unit>=300 && $unit<500)
      {
        $nonsubsidized=$unit-300;
        $initialprice=300 * $baseprice;
        $totalprice=$nonsubsidized*$incrementprice;
        $finalprice = $initialprice + $totalprice;
        $subsidized = $unit - $nonsubsidized;
      }

      elseif($unit>=500)
      {
        $nonsubsidized=$unit-300;
        $initialprice=300 * $baseprice;
        $totalprice=$nonsubsidized*$dincrementprice;
        $finalprice = $initialprice + $totalprice;
        $subsidized = $unit - $nonsubsidized;
      }

     


//unit calculation

$Solwatt = mt_rand(200000,250000);
echo $Solwatt."<br>";
      $Solkilowatt=$Solwatt/1000;
      $hour=1;

      $Solunit=$Solkilowatt*$hour;

      $totalunit= $Solunit + $unit;

      if($totalunit<300)
      {
        $Sinitialprice=$totalunit*$baseprice;
        $Snonsubsidized=0;
        $Ssubsidized=$totalunit;
        $Stotalprice=0;
        $Sfinalprice = $Sinitialprice + 0;
      }

      elseif($totalunit>=300 && $totalunit<500)
      {
        $Snonsubsidized=$totalunit-300;
        $Sinitialprice=300 * $baseprice;
        $Stotalprice=$Snonsubsidized*$Sincrementprice;
        $Sfinalprice = $Sinitialprice + $Stotalprice;
        $Ssubsidized = $totalunit - $Snonsubsidized;
      }

      elseif($totalunit>=500)
      {
        $Snonsubsidized=$totalunit-300;
        $Sinitialprice=300 * $baseprice;
        $Stotalprice=$Snonsubsidized*22.5;
        $Sfinalprice = $Sinitialprice + $Stotalprice;
        $Ssubsidized = $totalunit - $Snonsubsidized;
      }



     
      return view('client/realTimeBill', ['unit'=>$unit, 'subsidized'=>$subsidized, 'nonsubsidized'=>$nonsubsidized, 'initialprice'=> $initialprice, 'totalprice'=>$totalprice, 'finalprice'=>$finalprice , 'totalunit'=>$totalunit, 'Ssubsidized'=>$Ssubsidized, 'Snonsubsidized'=>$Snonsubsidized, 'Sinitialprice'=> $Sinitialprice, 'Stotalprice'=>$Stotalprice, 'Sfinalprice'=>$Sfinalprice , ]);
    }

 public function saveJson(Request $request)
{
    $data = json_decode($request->getContent());
error_log($data);
error_log('1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111');
}


public function getlocation(Request $request)
{


}


    
 


     /**
     * Write code on Method
     *
     * @return response()
     */
    public function calender(Request $request)
    {
    	$this->get_firebase_id();

  
        if($request->ajax()) {
       
             $data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
  
             return response()->json($data);
        }
  
        return view('client/calender');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = Event::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Event::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Event::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }

    public function message(){
      $this->get_firebase_id();
      $device_id = $this->get_device_id();

//get serve location when online
      // echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));




      // If you installed the recommended PSR-17/18 implementations, here's how to create the
      // necessary `$httpClient` and `$httpRequestFactory`:
      $httpRequestFactory = new RequestFactory();
      $httpClient = GuzzleAdapter::createWithConfig([]);

      $owm = new OpenWeatherMap('c703c151b4353f2933b11fa0848a0ac2', $httpClient, $httpRequestFactory);

      $forecast = $owm->getForecastUVIndex(31.5204, 74.3587, $cnt = 8);
      
      
//       $own = new OpenWeatherMap('c703c151b4353f2933b11fa0848a0ac2', $httpClient, $httpRequestFactory);

//      // $weather = $own->getRawWeatherData(['lat' => 52.520008, 'lon' => 13.404954], 'metric');
     $units = 'metric';
     $lang = 'en';
// $forecasts = $own->getWeatherForecast(1172451, $units, $lang, '', 2);

$no2 = $owm->getAirPollution("NO2", "31", "74");
if ($no2 === null) {
      // echo "No data available";
} else {
    // echo $no2->value;
    // echo $no2->valueStratosphere;
    // echo $no2->valueTroposphere;
}



$weather = $owm->getWeather(['lat' => 31.5204, 'lon' => 74.3587], 'metric');
 //@var Cmfcmf\OpenWeatherMap\Util\Unit $temperature
$temperature = $weather->temperature->now;
$temp_min = $weather->temperature->min;
$temp_max = $weather->temperature->max;
$humidity = $weather->humidity;
$speed = $weather->wind->speed;
$icon = $weather->weather->icon;
$description = $weather->weather->description;
// echo $weather->sun->rise;
// echo$weather->sun->set;



// echo $temperature->getDescription(); // ""
// echo "<br>";

// echo $temperature->getFormatteed(); // "26.9 °C"
$temp =  $temperature->__toString(); // "26.9 °C"
// // @var Cmfcmf\OpenWeatherMap\Util\Unit $temperature
// $temperature = $weather->temperature->now; 
//  echo  $temperature->getValue(); // 26.9
// echo $temperature->getUnit(); // "°C"
// echo $temperature->getDescription(); // ""
// echo $temperature->getFormatteed(); // "26.9 °C"
// echo $temperature->__toString(); // "26.9 °C"
//       // foreach ($forecast as $day) {
//       //   echo "<br>";
      //     print_r("{$day->time->format('r')} will have an uv index of: $day->uvIndex");
      // }
// $weathers = $owm->getWeatherGroup(['lat' => 52.520008, 'lon' => 13.404954], $units, $lang);
// foreach ($weathers as $weather) {
//   // Do something
// }


      // try {
      //     $weather = $owm->getWeather('Berlin', 'metric', 'de');
      // } catch(OWMException $e) {
      //     echo 'OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
      // } catch(\Exception $e) {
      //     echo 'General exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
      // }

      // echo $weather->temperature;
      // error_log($weather->temperature);

 
$uvIndex = $owm->getCurrentUVIndex(31.5204, 74.3587);
// echo "Current UV index: $uvIndex->uvIndex";
$UV =  $uvIndex->uvIndex;

 function WeatherUrl($url){
        $cn = curl_init();
        curl_setopt($cn, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cn, CURLOPT_URL, $url);    // get the contents using url
        $weatherdata = curl_exec($cn);


         // execute the curl request
        curl_close($cn); //close the cURL
        return $weatherdata;
    }
    $url="http://api.openweathermap.org/data/2.5/weather?lat=31.5204&lon=74.3587&appid=c703c151b4353f2933b11fa0848a0ac2";
    // q=Lahore,PK,IN&units=metric&appid=c703c151b4353f2933b11fa0848a0ac2
    // api.openweathermap.org/data/2.5/find?lat={lat}&lon={lon}&cnt={cnt}&appid={API key}


    $response=WeatherUrl($url);



    $data = json_decode($response);
  
     $currentTime = time();

      
      $visibility=$data->visibility;
    $name = $data->name;
    $day = date("l g:i a", $currentTime);
    $date = date("jS F, Y",$currentTime);
    // $description = ucwords($data->weather[0]->description);
    // $temp_max = $data->main->temp_max;
    // $temp_min =  $data->main->temp_min;
    // $humidity = $data->main->humidity;
    // $speed = $data->wind->speed;
    // $icon = $data->weather[0]->icon;








    
      
      return view('client/message' , ['temp'=>$temp, 'forecast' => $forecast, 'name'=>$name, 'day'=>$day, 'date'=>$date, 'description'=>$description, 'temp_max'=> $temp_max, 'temp_min'=>$temp_min, 'humidity'=>$humidity, 'speed'=>$speed, 'icon'=>$icon, 'UV'=>$UV, 'visibility'=>$visibility, ]);
    }


}

