<!DOCTYPE html>
<html>
<head>
	<title>Weather Forecast</title>



       <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDYLOkUExD6SfnoChasCIZapwQJ3La5Ic4",
    authDomain: "test-2191b.firebaseapp.com",
    databaseURL: "https://test-2191b-default-rtdb.firebaseio.com",
    projectId: "test-2191b",
    storageBucket: "test-2191b.appspot.com",
    messagingSenderId: "641365133482",
    appId: "1:641365133482:web:ac75efd8f0264dd056e8d3",
    measurementId: "G-GVQFQ357EF"
  };
 var value = [];
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  var firebaseRef = firebase.database().ref("{{  session('firebase_id')  }}/data");
  firebaseRef.on("value" , function(snapshot){

    
var i =0;

   data = snapshot.val();
  for(let j in data)
  {
    i++;
    value[i] = data[j]; 
  }

    document.getElementById("Active Power").innerHTML = value[1];
    document.getElementById("Apparent Power").innerHTML = value[2];
    document.getElementById("Reactive Power").innerHTML = value[3];


    document.getElementById("TotalPowerFactor").innerHTML = value[1];
    document.getElementById("Active").innerHTML = value[2];
    document.getElementById("Apparent").innerHTML = value[3]; 
    document.getElementById("Reactive").innerHTML = value[4];
    document.getElementById("ActiveEnergyTotal").innerHTML = value[5];

    document.getElementById("CurrentA").innerHTML = value[6];
    document.getElementById("CurrentB").innerHTML = value[7];
    document.getElementById("CurrentC").innerHTML = value[8];
    document.getElementById("VoltageA").innerHTML = value[9];
    document.getElementById("VoltageB").innerHTML = value[10];
    document.getElementById("VoltageC").innerHTML = value[11];
    
  });


</script>




	
<link href="<?php echo url('/'); ?>/client/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo url('/'); ?>/client/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/client/mstyle.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


 <style>
.report-container {
    font-family: Arial;
    font-size: 1.50em;
    color: #929292;
}

.report-container {
    /*border: #E0E0E0 1px solid;*/
    padding: 20px 40px 40px 40px;
    border-radius: 2px;
    width: 400px;
    margin: 0 auto;
}

.weather-icon {
    vertical-align: middle;
    margin-right: 20px;
}

.weather-forecast {
    color: #212121;
    font-size: 1.2em;
    font-weight: bold;
    margin: 20px 0px;
}

span.min-temperature {
    margin-left: 15px;
    color: #929292;
}

.time {
    line-height: 25px;
}
</style>

</head>
<body>
	<div class="ui-kit-dashboard-client-4">
  <div class="group-173">
    <div class="group-7">
      <h1 class="dashboard gotham-bold-blue-zodiac-25px">Dashboard</h1>
      <div class="bar-chart-2">
        <img
          class="line-2"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-1-4@1x.png"
        />
        <img
          class="line-1"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-1@1x.png"
        />
        <img
          class="line-3"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-3@1x.png"
        />
      </div>
    </div>
    <div class="group-5">
      <div class="home">
        <img
          class="path-436"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-436@1x.png"
        />
      </div>
     <a href="/client/chome"> <div class="home-1">Home</div></a>
    </div>
    <div class="group-8">
      <div class="package">
        <div class="overlap-group5">
          <img
            class="line-4"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-4-4@1x.png"
          />
          <img
            class="path-439"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-439@1x.png"
          />
          <img
            class="path-440"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-440@1x.png"
          />
          <img
            class="line-5"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-5@1x.png"
          />
        </div>
      </div>
    <a href="/client/analytics">  <div class="text-1 gotham-book-normal-black-13px">Prediction &amp; Analytics</div></a>
    </div>
    <div class="group-10">
      <img
        class="message-square"
        src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/message-square@1x.png"
      />
      <div class="messages">Weather Forecast</div>
    </div>
    <div class="group-11">
      <div class="calendar">
        <div class="overlap-group5-1">
          <div class="rectangle-1480 sizzling-red-border-2px"></div>
          <img
            class="line-8"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-8@1x.png"
          />
          <img
            class="line-9"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-8@1x.png"
          />
          <img
            class="line-10"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-10@1x.png"
          />
        </div>
      </div>
      <a href="/client/calender"><div class="calender gotham-book-normal-blue-zodiac-13px">Calender</div></a>
    </div>
    <div class="group-12">
      <div class="user">
        
          <i style="color: rgba(17, 205, 239, 1);" class="fas fa-file-invoice fa-2x"></i>
      </div>
     <a href="/client/invoice"> <div class="profile gotham-book-normal-blue-zodiac-13px">Invoices</div></a>
    </div>

    <div class="group-12">
        <div class="user">
         
          <i style="color: red;" class="fas fa-receipt fa-2x"></i>
        </div>
        <a href="/client/realTimeBill"><div class="profile gotham-book-normal-blue-zodiac-13px">Real-time Bill</div></a>
    </div>

    <!-- <div class="group-13">
      <div class="settings">
        <div class="overlap-group5-2">
          <div class="ellipse-341 border-class-2"></div>
          <img
            class="path-445"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-445@1x.png"
          />
        </div>
      </div>
      <div class="settings-1 gotham-book-normal-blue-zodiac-13px">Settings</div>
    </div> -->
  </div>
  <div class="overlap-group10">
    <div class="rectangle-1493"></div>
 
    <div class="bell">
      <img
        class="path-447"
        src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-447-1@1x.png"
      />
      <img
        class="path-448"
        src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-448-1@1x.png"
      />
    </div>
    <div class="help-circle border-class-3">
      <img
        class="path-465"
        src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-465-2@1x.png"
      />
      <img
        class="line-25"
        src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-25@1x.png"
      />
    </div>
    <div class="group-9843">
     <!-- <img
        class="beautiful--nd-1587009"
        src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/beautiful-beauty-blond-1587009@1x.png"
      />
      <div class="farhan-elahi">Farhan Elahi</div>-->
      <a href="/logout"><div class="group-23 blue-marguerite-border-1px"  onClick="(function(){ var _hsp = window._hsp = window._hsp || []; _hsp.push(['revokeCookieConsent']); })()">Logout</div></a>
    </div>
    <div class="client gotham-bold-black-25px">{{ session('name') }}</div>
    <div class="overlap-group2">
      <div class="group-9845">
        <div class="auto-flex1">
          <div class="energy-produced gotham-medium-bali-hai-11px">ACTIVE POWER</div>
            <div class="address gotham-book-normal-trout-18px" id="Active Power"><!--500 Watt--></div>
          <div class="auto-flex">
            <div class="text-2"><!--+3.48%--></div>
            <div class="today-progress">Current Progress</div>
          </div>
        </div>
        <div class="group-17">
          <div class="trending-">
            <div class="overlap-group5-4">
              <img
                class="path-47"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-474@1x.png"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="group-985">
        <img
          class="path-1925"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/arrow-pointing-to-right--3-@1x.png"
        />
      </div>
    </div>
    <div class="overlap-group">
      <div class="group-984">
        <div class="auto-flex-3">
          <div class="energy-used gotham-medium-bali-hai-11px">REACTIVE POWER</div>
            <div class="address gotham-book-normal-trout-18px" id="Reactive Power"><!--600 Watt--></div>
        </div>
        <div class="group-17-1">
          <div class="trending-">
            <div class="overlap-group5-5">
              <img
                class="path-47"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-472@1x.png"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="group-985">
        <img
          class="path-1925"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/arrow-pointing-to-right--3-@1x.png"
        />
      </div>
    </div>
    <div class="overlap-group1">
      <div class="group-9847">
        <div class="overlap-group7">
          <div class="recommendations gotham-medium-bali-hai-11px">APPARENT POWER</div>
          <div class="overlap-group5-6">
             <div class="low-battary gotham-book-normal-trout-18px" id="Apparent Power"><!--Low Battary--></div>
            <div class="text-3 gotham-medium-bali-hai-11px"><!--Reduce the power load--></div>
          </div>
          <div class="overlap-group6">
            <div class="ellipse-353"></div>
            <img
              class="line-107"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-107@1x.png"
            />
            <img
              class="line-108"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-108@1x.png"
            />
            <img
              class="line-109"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-109@1x.png"
            />
            <img
              class="line-110"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-110@1x.png"
            />
            <img
              class="line-111"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-111@1x.png"
            />
            <img
              class="line-112"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-112@1x.png"
            />
          </div>
        </div>
        <div class="remaining-time gotham-medium-bali-hai-11px">remaining time</div>
      </div>
      <div class="group-985">
        <img
          class="path-1925"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/arrow-pointing-to-right--3-@1x.png"
        />
      </div>
      <div class="ellipse-377 border-class-1"></div>
      <div class="ellipse-378 border-class-1"></div>
      <div class="ellipse-379 border-class-1"></div>
      <div class="ellipse-380 border-class-1"></div>
      <div class="ellipse-381 border-class-1"></div>
      <div class="ellipse-382 border-class-1"></div>
      <div class="ellipse-383 border-class-1"></div>
      <div class="ellipse-384 border-class-1"></div>
      <div class="date"><!--1 hour--></div>
    </div>
    <div class="overlap-group3">
      <a href="../chart.html">
      <div class="group-984">
        <div class="performance gotham-medium-bali-hai-11px">RealTime Graph</div>
        <div class="group-17-2">
          <div class="bar-chart-2-1">
            <img
              class="line-3-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-3-3@1x.png"
            />
            <img
              class="line-2-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-2-3@1x.png"
            />
            <img
              class="line-1-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-1-3@1x.png"
            />
          </div>
        </div>
      </div>
      </a>
      <div class="group-985">
        <img
          class="path-1925"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/arrow-pointing-to-right--3-@1x.png"
        />
      </div>
      <div class="text-16 gotham-book-normal-trout-18px"><a href="/phpfirebase_sdk"><button> Firebase </button></a></div>
    </div>
    <img
      class="black-and--es-logo123"
      src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/black-and-red-laser-games-logo123@1x.png"
    />
    <div class="messages-1 gotham-book-normal-black-13px">Weather Forecast</div>
    <img
      class="message-square-1"
      src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/message-square-16@1x.png"
    />
  
    <div class="overlap-group4">
      <div class="message">
        <div class="overlap-group5-7">

          <!--  <img style="margin-right: 250px;" src="https://www.theweather.com/wimages/foto1673edf8a43ca9cb51d3e4fb371ac242.png"> -->
      <!-- <button style="margin-left: 55em;" onclick="window.print()">Print this page</button> -->


      <div class="typing" style="margin: 40px ; margin-left: 200px; top: 1px; width: 500px;">

        @foreach($forecast as $key)

          <p>{{$key->time->format('r')}} have the <strong>UV index: {{ $key->uvIndex }}  </strong></p>
           <br> 

        @endforeach
      </div>


      
     
            <div class="typing"  style="margin: 40px ; margin-left: -350px;  top: 1px; width: 500px;">
             <div class="report-container">
                <h2>Weather Status</h2>
                <div class="">
                    <p>{{$day}}</p>
                    <p>{{$date}}</p>
                    <p>{{$description}}</p>
                    <p>UV index: {{$UV}}</p>
                    <p>Visibility: {{$visibility}}</p>
                   
                    <!-- <div>icon: {{$icon}}</div> -->
                    
                </div>
                <div class="weather-forecast">
                    <img
                        src="http://openweathermap.org/img/w/{{$icon}}.png"
                        class="weather-icon" />{{$temp_max}}<span
                        class="min-temperature">{{$temp_min}}</span>

                </div>
                <div class="">
                    <div>Humidity: {{$humidity}}</div>
                    <div>Wind: {{$speed}}</div>
                </div>
          </div>
            </div>


        
        
        
     
         <!-- <div class="overlap-group6-1">
            <div class="chat2">
              <p class="text-4 avenir-book-normal-black-13px">
                Hey John, I have a question regarding my acccount. Do you have time for a call?
              </p>
            </div>
            <div class="time">
              <div class="date-1 avenir-book-normal-gun-powder-11px">10:24</div>
              <div class="date-2 avenir-book-normal-gun-powder-11px">10:25 am</div>
            </div>
          </div>
          <div class="chat1">
            <div class="overlap-group7-1">
              <img
                class="path-397"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-397@1x.png"
              />
              <p class="text-5 avenir-book-normal-trout-13px">Hi Alison, how can I help you?</p>
            </div>
          </div>
        </div>
      </div>
      <div class="inbox">
        <div class="overlap-group8">
          <div class="rectangle-181"></div>
          <div class="listactive">
            <div class="auto-flex1-1">
              <img
                class="avatar"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar@1x.png"
              />
              <div class="auto-flex-1">
                <div class="name-1 avenir-black-trout-13px">John Mayers</div>
                <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
              </div>
              <div class="address avenir-book-normal-gun-powder-11px">3 min ago</div>
            </div>
            <img
              class="path-294"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
            />
          </div>
          <div class="listname">
            <div class="listname-2">
              <div class="auto-flex-2">
                <img
                  class="avatar-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar-1@1x.png"
                />
                <div class="auto-flex-1">
                  <div class="name-1 avenir-black-trout-13px">David James</div>
                  <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
                </div>
                <div class="names-copy avenir-book-normal-gun-powder-11px">10 min ago</div>
              </div>
              <img
                class="path-294"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
              />
            </div>
            <div class="listname-1">
              <div class="auto-flex-2">
                <img
                  class="avatar-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar-2@1x.png"
                />
                <div class="auto-flex-1">
                  <div class="name avenir-black-trout-13px">Tony Stark</div>
                  <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
                </div>
                <div class="x10-min-ago avenir-book-normal-gun-powder-11px">40 min ago</div>
              </div>
              <img
                class="path-294"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
              />
            </div>
            <div class="listname-1">
              <div class="auto-flex-2">
                <img
                  class="avatar-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar-3@1x.png"
                />
                <div class="auto-flex-1">
                  <div class="tony-stark avenir-black-trout-13px">Bessie Berry</div>
                  <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
                </div>
                <div class="x10-min-ago-1 avenir-book-normal-gun-powder-11px">1 hours ago</div>
              </div>
              <img
                class="path-294"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
              />
            </div>
            <div class="listname-1">
              <div class="auto-flex-2">
                <img
                  class="avatar-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar-4@1x.png"
                />
                <div class="auto-flex-1">
                  <div class="tony-stark-1 avenir-black-trout-13px">Gleb Kuznetsov</div>
                  <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
                </div>
                <div class="x10-min-ago-1 avenir-book-normal-gun-powder-11px">5 hours ago</div>
              </div>
              <img
                class="path-294"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
              />
            </div>
            <div class="listname-1">
              <div class="auto-flex-2">
                <img
                  class="avatar-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar-5@1x.png"
                />
                <div class="auto-flex-1">
                  <div class="tony-stark-2 avenir-black-trout-13px">Andrey Prokopenko</div>
                  <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
                </div>
                <div class="x10-min-ago-3 avenir-book-normal-gun-powder-11px">12 hours ago</div>
              </div>
              <img
                class="path-294"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
              />
            </div>
            <div class="listname-1">
              <div class="auto-flex-2">
                <img
                  class="avatar-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar-6@1x.png"
                />
                <div class="auto-flex-1">
                  <div class="tony-stark-3 avenir-black-trout-13px">Nick Herasimenka</div>
                  <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
                </div>
                <div class="x10-min-ago-4 avenir-book-normal-gun-powder-11px">1 day ago</div>
              </div>
              <img
                class="path-294"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
              />
            </div>
            <div class="listname-1">
              <div class="auto-flex-2">
                <img
                  class="avatar-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar-7@1x.png"
                />
                <div class="auto-flex-1">
                  <div class="tony-stark-4 avenir-black-trout-13px">Valentin Salmon</div>
                  <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
                </div>
                <div class="x10-min-ago-2 avenir-book-normal-gun-powder-11px">2 days ago</div>
              </div>
              <img
                class="path-294"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
              />
            </div>
            <div class="listname-1">
              <div class="auto-flex-2">
                <img
                  class="avatar-1"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/avatar-8@1x.png"
                />
                <div class="auto-flex-1">
                  <div class="tony-stark-5 avenir-black-trout-13px">Miro Kirov</div>
                  <p class="text- avenir-book-normal-gun-powder-11px">Lorem ipsum dolor sit amet Consectetur…</p>
                </div>
                <div class="x10-min-ago-2 avenir-book-normal-gun-powder-11px">2 days ago</div>
              </div>
              <img
                class="path-294"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
              />
            </div>
          </div>
          <img
            class="path-311"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-311@1x.png"
          />
          <img
            class="path-312"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-311@1x.png"
          />
          <img
            class="path-313"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-294@1x.png"
          />
          <div class="search-input">
            <img
              class="search-icon"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/search-icon@1x.png"
            />
            <div class="text-15 avenir-book-normal-trout-13px">Search Message or Name…</div>
          </div>
        </div>
      </div>
      <div class="group-248">
        <div class="auto-flex16">
          <div class="overlap-group9">
            <div class="circle-sig-vid-purple"></div>
          </div>
          <div class="name-2">
            <div class="overlap-group5-8">
              <div class="sales-manager">Sales Manager</div>
              <div class="uur-ate">Uğur Ateş</div>
            </div>
          </div>
          <div class="close">
            <div class="overlap-group6-2">
              <div class="rectangle-145"></div>
              <div class="rectangle-146"></div>
            </div>
          </div>
        </div>
        <img
          class="path-314"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-314@1x.png"
        />
      </div>-->

      <!-- get latitude and longtitude -->
     <!--  <div class="typing" style="margin: 40px ; left:12px;  padding: 5px 5px;">
        <div class="show-more-link avenir-book-normal-black-13px"><p>Click the button to get your coordinates.</p>
              
          <button onclick="getLocation()">Try It</button>

          <p id="demo"></p>



       </div>
        
        </div> -->



         
        </div>
      </div>
     <!--  <img
        class="path-315"
        src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-315@1x.png"
      /> -->
    </div>

    <div class="chat-room gotham-bold-black-25px">Weather Forecast</div>
    <img
      class="line-114"
      src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-114@1x.png"
    />
  </div>
</div>


<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9295841.js"></script>
<!-- End of HubSpot Embed Code -->




<!-- get langtitude and longtitude -->
<script>

var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}
</script>

  <x-footer />


</body>
</html>