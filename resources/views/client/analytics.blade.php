<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  

table {
  width: 100%;
  margin: 20px auto;
  table-layout: auto;
}

.sub_heading{
    --bali-hai: rgba(136, 152, 170, 1);
    --blue-zodiac: rgba(23, 43, 77, 1);
    --catskill-white: rgba(241, 243, 249, 1);
    --dove-gray: rgba(112, 112, 112, 1);
    --hunter-green: rgba(22, 22, 22, 1);
    --robins-egg-blue: rgba(17, 205, 239, 1);
    --stack: rgba(141, 141, 141, 1);
    --trout: rgba(77, 79, 92, 1);
    box-sizing: border-box;
  
    font: inherit;
    vertical-align: baseline;
    font-family: Gotham-Medium, Helvetica, Arial, serif;
    font-size: 13px;
    font-weight: 500;
    left: 30px;
 
    position: absolute;
    text-align: left;
    top: 5px;
    white-space: nowrap;" 
}

.fixed {
  table-layout: fixed;
}

table,
td,
th {
  border-collapse: collapse;
}

th,
td {
  padding: 10px;
  border: solid 1px;
  text-align: center;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 375px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

</style>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  height:  85%;
  margin:40px;
  font-size: 18px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 20px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
</style>

  <title>Client Analytics</title>
  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/client/astyle.css">


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


    document.getElementById("TotalPowerFactor").html = value[1];
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



</head>
<body>


  <div class="ui-kit-dashboard-client-3">
    <div class="group-173">
      <div class="group-7">
        <div class="bar-chart-2">
          <img
            class="line-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-1@1x.png"
          />
          <img
            class="line-2"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-1-4@1x.png"
          />
          <img
            class="line-3"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-3@1x.png"
          />
        </div>
        <div class="dashboard">Dashboard</div>
       
      </div>
      <div class="group-5">
        <a href="/client/chome"><div class="home">Home</div></a>
        <div class="home-1">
          <img
            class="path-436"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-436@1x.png"
          />
        </div>
      </div>
      <div class="group-8">
        <div class="text-1">Prediction &amp; Analytics</div>
        <div class="package">
          <div class="overlap-group-1">
            <img
              class="line-4"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-4-4@1x.png"
            />
            <img
              class="path-439"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-439-8@1x.png"
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
      </div>
      <div class="group-10">
       <a href="/client/message"> <div class="messages gotham-book-normal-blue-zodiac-13px">Weather Forecast</div></a>
        <img
          class="message-square"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/message-square@1x.png"
        />
      </div>
      <div class="group-11">
        <a href="/client/calender"><div class="calender gotham-book-normal-blue-zodiac-13px">Calender</div></a>
        <div class="calendar">
          <div class="overlap-group6">
            <div class="rectangle-1480 border-class-2"></div>
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
      </div>
      <div class="group-12">
        <a href="/client/invoice"> <div class="profile gotham-book-normal-blue-zodiac-13px">Invoices</div></a>
        <div class="user">
            <i style="color: rgba(17, 205, 239, 1);" class="fas fa-file-invoice fa-2x"></i>
          
        </div>
      </div>

      <div class="group-012">
        <a href="/client/realTimeBill"> <div class="profile gotham-book-normal-blue-zodiac-13px">Real-time Bill</div></a>
        <div class="user">
             <i style="color: red;" class="fas fa-receipt fa-2x"></i>
          
        </div>
      </div>

      <!-- <div class="group-13">
        <div class="settings gotham-book-normal-blue-zodiac-13px">Settings</div>
        <div class="settings-1">
          <div class="overlap-group6-1">
            <div class="ellipse-341 border-class-3"></div>
            <img
              class="path-445"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-445@1x.png"
            />
          </div>
        </div>
      </div> -->
    </div>
    <div class="rectangle-1493"></div>
    <
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
    <div class="help-circle border-class-4">
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
    <div class="client">{{ session('name') }}</div>
    <div class="overlap-group4">
      <div class="group-984">
        <div class="energy-produced gotham-medium-bali-hai-11px">ACTIVE POWER</div>
            <div class="address gotham-book-normal-trout-18px" id="Active Power"><!--500 Watt--></div>
        <div class="text-2"><!--+3.48%--></div>
        <div class="today-progress">Current Progress</div>
        <div class="group-17">
          <div class="trending-">
            <div class="overlap-group6-3">
              <img
                class="path-474"
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
    <div class="overlap-group2">
      <div class="group-984">
        <div class="energy-used gotham-medium-bali-hai-11px">REACTIVE POWER</div>
            <div class="address gotham-book-normal-trout-18px" id="Reactive Power"><!--600 Watt--></div>
        <div class="group-17-1">
          <div class="trending-">
            <div class="overlap-group6-4">
              <img
                class="path-472"
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
      <div class="group-984">
        <div class="recommendations gotham-medium-bali-hai-11px">APPARENT POWER</div>
        <div class="overlap-group7">
          <div class="low-battary gotham-book-normal-trout-18px" id="Apparent Power"><!--Low Battary--></div>
          <div class="text-3 gotham-medium-bali-hai-11px"><!--Reduce the power load--></div>
        </div>
        <div class="overlap-group6-5">
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
        <div class="remaining-time gotham-medium-bali-hai-11px"><!--remaining time--></div>
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
    <div class="overlap-group">
      {{--
      <a href="../chart.html">
        --}}
      <div class="group-984">
        <div class="performance gotham-medium-bali-hai-11px">RealTime Graph</div>
        <div class="text-4 gotham-book-normal-trout-18px" ><a href="/phpfirebase_sdk"><button> Firebase </button></a></div>

        <div class="group-17-2">
          <div class="bar-chart-2-1">
            <img
              class="line-1-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-1-3@1x.png"
            />
            <img
              class="line-2-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-2-3@1x.png"
            />
            <img
              class="line-3-1"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-3-3@1x.png"
            />
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
    </a>
    <img
      class="black-and--es-logo123"
      src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/black-and-red-laser-games-logo123@1x.png"
    />
    <div class="package-1" >
      <div class="overlap-group-1" style="width: 500px;">
        <img
          class="line-4"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-4-17@1x.png"
        />
        <img
          class="path-439"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-439-17@1x.png"
        />
        <img
          class="path-440"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-440-17@1x.png"
        />
        <img
          class="line-5"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-5-17@1x.png"
        />
        <div class="sub_heading">Prediction and Analytics</div>
      </div>
    </div>

     <div class="overlap-group5">

        <div class="group-9806" >

                    
                




            <table class="styled-table" style="font-size: 20px;">
                      <thead>
                        <th>
                          production: {{$production}}
                        </th>
                        <th>
                          consumption: {{$consumption}}
                        </th>
                      </thead>
                    </table>

            {{--
            <table class="styled-table">
              <thead>
                <th>deviceID</th>
                <th>name</th>
                <th>EU</th>
                <th>value</th>
              </thead>
            @foreach($data as $dat)


            <tr>
              <td>{{$dat->device_id}}</td>
              <td>{{$dat->name}}</td>
              <td>{{$dat->EU}}</td>
              <td>{{$dat->value}}</td>
            </tr>

            @endforeach
             

            </table>
            --}}




            <script>
            window.onload = function () {

            var dataPoints1 = [];
            var dataPoints2 = [];
            var dataPoints3 = [];
            var dataPoints4 = [];
            var dataPoints5 = [];
            var dataPoints6 = [];
            var dataPoints7 = [];
            var dataPoints8 = [];
            var dataPoints9 = [];

            var chart = new CanvasJS.Chart("chartContainer", {
              zoomEnabled: true,
              title: {
                text: "Live Values of Solar Power"
              },
              axisX: {
                title: "chart updates every 3 secs"
              },
              axisY:{
                prefix: "Var: "
              }, 
              toolTip: {
                shared: true
              },
              legend: {
                cursor:"pointer",
                verticalAlign: "top",
                fontSize: 22,
                fontColor: "dimGrey",
                itemclick : toggleDataSeries
              },
              data: [{ 
                type: "line",
                xValueType: "dateTime",
                yValueFormatString: "####.00",
                xValueFormatString: "hh:mm:ss TT",
                showInLegend: true,
                name: "Active",
                dataPoints: dataPoints1
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "Reactive" ,
                    dataPoints: dataPoints2
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "Apparent" ,
                    dataPoints: dataPoints3
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "CurrentA" ,
                    dataPoints: dataPoints4
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "CurrentB" ,
                    dataPoints: dataPoints5
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "CurrentC" ,
                    dataPoints: dataPoints6
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "VoltageA" ,
                    dataPoints: dataPoints7
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "VoltageB" ,
                    dataPoints: dataPoints8
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "VoltageC" ,
                    dataPoints: dataPoints9
                }]
            });

            function toggleDataSeries(e) {
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
              chart.render();
            }

            var updateInterval = 3000;
            // initial value
            var yValue1;
            var yValue2;
            var yValue3; 
            var yValue4;
            var yValue5; 
            var yValue6;
            var yValue7; 
            var yValue8;
            var yValue9;

            var time = new Date;
            // starting at current
            time.setHours(time.getHours());
            time.setMinutes(time.getMinutes()-5);
            time.setSeconds(time.getSeconds());
            time.setMilliseconds(00);

            function updateChart(count) {
              count = count || 1;
              var deltaY1, deltaY2;
              for (var i = 0; i < count; i++) {
                time.setTime(time.getTime()+ updateInterval);
                


             // adding random value and rounding it to two digits. 
              yValue1 = Number(document.getElementById("Active").innerHTML);
              yValue2 = Number(document.getElementById("Reactive").innerHTML);
              yValue3 = Number(document.getElementById("Apparent").innerHTML);
              yValue4 = Number(document.getElementById("CurrentA").innerHTML);
              yValue5 = Number(document.getElementById("CurrentB").innerHTML);
              yValue6 = Number(document.getElementById("CurrentC").innerHTML);
              yValue7 = Number(document.getElementById("VoltageA").innerHTML);
              yValue8 = Number(document.getElementById("VoltageB").innerHTML);
              yValue9 = Number(document.getElementById("VoltageC").innerHTML);
                
               

                // pushing the new values
                dataPoints1.push({
                  x: time.getTime(),
                  y: yValue1
                });
                dataPoints2.push({
                  x: time.getTime(),
                  y: yValue2
                });
                dataPoints3.push({
                  x: time.getTime(),
                  y: yValue3
                });
                dataPoints4.push({
                  x: time.getTime(),
                  y: yValue4
                });
                dataPoints5.push({
                  x: time.getTime(),
                  y: yValue5
                });
                dataPoints6.push({
                  x: time.getTime(),
                  y: yValue6
                });
                dataPoints7.push({
                  x: time.getTime(),
                  y: yValue7
                });
                dataPoints8.push({
                  x: time.getTime(),
                  y: yValue8
                });
                dataPoints9.push({
                  x: time.getTime(),
                  y: yValue9
                });

             

              }


              // updating legend text with  updated with y Value 
              chart.options.data[0].legendText = " Active: " + yValue1;
              chart.options.data[1].legendText = " Reactive: " + yValue2; 
              chart.options.data[2].legendText = " Apparent: " + yValue3;
              chart.options.data[3].legendText = " CurrentA: " + yValue4; 
              chart.options.data[4].legendText = " CurrentB: " + yValue5;
              chart.options.data[5].legendText = " CurrentC: " + yValue6; 
              chart.options.data[6].legendText = " VoltageA: " + yValue7;
              chart.options.data[7].legendText = " VoltageB: " + yValue8; 
              chart.options.data[8].legendText = " VoltageC: " + yValue9;

              chart.render();
            }
            // generates first set of dataPoints 
            updateChart(100); 
            setInterval(function(){updateChart()}, updateInterval);

            }
            </script>


     <!--    <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  title: {
    text: "Temperature of Each Boiler"
  },
  axisY: {
    title: "Temperature (°C)",
    includeZero: true,
    suffix: " °C"
  },
  data: [{
    type: "column", 
    yValueFormatString: "#,### °C",
    indexLabel: "{y}",
    dataPoints: [
      { label: "boiler1", y: 206 },
      { label: "boiler2", y: 163 },
      { label: "boiler3", y: 154 },
      { label: "boiler4", y: 176 },
      { label: "boiler5", y: 184 },
      { label: "boiler6", y: 122 }
    ]
  }]
});

function updateChart() {
  var boilerColor, deltaY, yVal;
  var dps = chart.options.data[0].dataPoints;
  for (var i = 0; i < dps.length; i++) {
    deltaY = Math.round(2 + Math.random() *(-2-2));
    yVal = deltaY + dps[i].y > 0 ? dps[i].y + deltaY : 0;
    boilerColor = yVal > 200 ? "#FF2500" : yVal >= 170 ? "#FF6000" : yVal < 170 ? "#6B8E23 " : null;
    dps[i] = {label: "Boiler "+(i+1) , y: yVal, color: boilerColor};
  }
  chart.options.data[0].dataPoints = dps; 
  chart.render();
};
updateChart();

setInterval(function() {updateChart()}, 500);

}
</script>
 -->
            <div id="chartContainer" style="height: 500px; width: 100%;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

               <!-- <input type="hidden" name="Active" id="Active">
               <input type="hidden" name="Reactive" id="Reactive">
               <input type="hidden" name="Apparent" id="Apparent">
               <input type="hidden" name="CurrentA" id="CurrentA">
               <input type="hidden" name="CurrentB" id="CurrentB">
               <input type="hidden" name="CurrentC" id="CurrentC">
               <input type="hidden" name="VoltageA" id="VoltageA">
               <input type="hidden" name="VoltageB" id="VoltageB">
               <input type="hidden" name="VoltageC" id="VoltageC"> -->
            
            <table   style="height: 300px; width: 100%; font-size: 20px; padding-left: 20px; margin-top: 100px;">
              <th>
                <tr>
                  <td  style="font-size: 60px;">label</td>
                  <td style="font-size: 60px;">value</td>
                </tr>
              </th>
              <tr>
                <td>Active Power</td>
                <td id="Active" name="Active" value=""></td>
              </tr>
              <tr>
                <td>Apparent Power</td>
                <td id="Apparent" name="Apparent" value=""></td>
              </tr>
              <tr>
                <td>Reactive Power</td>
                <td id="Reactive" name="Reactive" value=""></td>
              </tr>
              <tr>
                <td>CurrentA</td>
                <td id="CurrentA"></td>
              </tr>
              <tr>
                <td>CurrentB</td>
                <td id="CurrentB"></td>
              </tr>
              <tr>
                <td>CurrentC</td>
                <td id="CurrentC"></td>
              </tr>
              <tr>
                <td>VoltageA</td>
                <td id="VoltageA"></td>
              </tr>
              <tr>
                <td>VoltageB</td>
                <td id="VoltageB"></td>
              </tr>
              <tr>
                <td>VoltageC</td>
                <td id="VoltageC"></td>
              </tr>
              <tr>
                <td>Total Power Factor</td>
                <td id="TotalPowerFactor"></td>
              </tr>
              <tr>
                <td>Active Energy Total</td>
                <td id="ActiveEnergyTotal"></td>
              </tr>
              <tr>
                <td>result</td>
                <td id="result"></td>
              </tr>
               
              
              
            </table> 
        </div>  





<div class="group-9806"  style="margin-top: 650px;">

                    
                


 <!--           
            <script>
            window.onload = function () {

            var dataPoints1 = [];
            var dataPoints2 = [];
            var dataPoints3 = [];
            var dataPoints4 = [];
            var dataPoints5 = [];
            var dataPoints6 = [];
            var dataPoints7 = [];
            var dataPoints8 = [];
            var dataPoints9 = [];

            var chart = new CanvasJS.Chart("chartContainer2", {
              zoomEnabled: true,
              title: {
                text: "Values of Solar Power"
              },
              axisX: {
                title: "chart updates every 3 secs"
              },
              axisY:{
                prefix: "Var: "
              }, 
              toolTip: {
                shared: true
              },
              legend: {
                cursor:"pointer",
                verticalAlign: "top",
                fontSize: 22,
                fontColor: "dimGrey",
                itemclick : toggleDataSeries
              },
              data: [{ 
                type: "line",
                xValueType: "dateTime",
                yValueFormatString: "####.00",
                xValueFormatString: "hh:mm:ss TT",
                showInLegend: true,
                name: "Active",
                dataPoints: dataPoints1
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "Reactive" ,
                    dataPoints: dataPoints2
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "Apparent" ,
                    dataPoints: dataPoints3
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "CurrentA" ,
                    dataPoints: dataPoints4
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "CurrentB" ,
                    dataPoints: dataPoints5
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "CurrentC" ,
                    dataPoints: dataPoints6
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "VoltageA" ,
                    dataPoints: dataPoints7
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "VoltageB" ,
                    dataPoints: dataPoints8
                },
                  {       
                    type: "line",
                    xValueType: "dateTime",
                    yValueFormatString: "####.00",
                    showInLegend: true,
                    name: "VoltageC" ,
                    dataPoints: dataPoints9
                }]
            });

            function toggleDataSeries(e) {
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
              chart.render();
            }

            var updateInterval = 3000;
            // initial value
            var yValue1;
            var yValue2;
            var yValue3; 
            var yValue4;
            var yValue5; 
            var yValue6;
            var yValue7; 
            var yValue8;
            var yValue9;

            var time = new Date;
            // starting at current
            time.setHours(time.getHours());
            time.setMinutes(time.getMinutes()-5);
            time.setSeconds(time.getSeconds());
            time.setMilliseconds(00);

            function updateChart(count) {
              count = count || 1;
              var deltaY1, deltaY2;
              for (var i = 0; i < count; i++) {
                time.setTime(time.getTime()+ updateInterval);
                


             // adding random value and rounding it to two digits. 
              yValue1 = Number(document.getElementById("Active").innerHTML);
              yValue2 = Number(document.getElementById("Reactive").innerHTML);
              yValue3 = Number(document.getElementById("Apparent").innerHTML);
              yValue4 = Number(document.getElementById("CurrentA").innerHTML);
              yValue5 = Number(document.getElementById("CurrentB").innerHTML);
              yValue6 = Number(document.getElementById("CurrentC").innerHTML);
              yValue7 = Number(document.getElementById("VoltageA").innerHTML);
              yValue8 = Number(document.getElementById("VoltageB").innerHTML);
              yValue9 = Number(document.getElementById("VoltageC").innerHTML);
                
               

                // pushing the new values
                dataPoints1.push({
                  x: time.getTime(),
                  y: yValue1
                });
                dataPoints2.push({
                  x: time.getTime(),
                  y: yValue2
                });
                dataPoints3.push({
                  x: time.getTime(),
                  y: yValue3
                });
                dataPoints4.push({
                  x: time.getTime(),
                  y: yValue4
                });
                dataPoints5.push({
                  x: time.getTime(),
                  y: yValue5
                });
                dataPoints6.push({
                  x: time.getTime(),
                  y: yValue6
                });
                dataPoints7.push({
                  x: time.getTime(),
                  y: yValue7
                });
                dataPoints8.push({
                  x: time.getTime(),
                  y: yValue8
                });
                dataPoints9.push({
                  x: time.getTime(),
                  y: yValue9
                });

             

              }


              // updating legend text with  updated with y Value 
              chart.options.data[0].legendText = " Active: " + yValue1;
              chart.options.data[1].legendText = " Reactive: " + yValue2; 
              chart.options.data[2].legendText = " Apparent: " + yValue3;
              chart.options.data[3].legendText = " CurrentA: " + yValue4; 
              chart.options.data[4].legendText = " CurrentB: " + yValue5;
              chart.options.data[5].legendText = " CurrentC: " + yValue6; 
              chart.options.data[6].legendText = " VoltageA: " + yValue7;
              chart.options.data[7].legendText = " VoltageB: " + yValue8; 
              chart.options.data[8].legendText = " VoltageC: " + yValue9;

              chart.render();
            }
            // generates first set of dataPoints 
            updateChart(100); 
            setInterval(function(){updateChart()}, updateInterval);

            }
            </script> -->

<!-- 
        <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer2", {
  title: {
    text: "Temperature of Each Boiler"
  },
  axisY: {
    title: "Temperature (°C)",
    includeZero: true,
    suffix: " °C"
  },
  data: [{
    type: "column", 
    yValueFormatString: "#,### °C",
    indexLabel: "{y}",
    dataPoints: [
      { label: "boiler1", y: 206 },
      { label: "boiler2", y: 163 },
      { label: "boiler3", y: 154 },
      { label: "boiler4", y: 176 },
      { label: "boiler5", y: 184 },
      { label: "boiler6", y: 122 }
    ]
  }]
});

function updateChart() {
  var boilerColor, deltaY, yVal;
  var dps = chart.options.data[0].dataPoints;
  for (var i = 0; i < dps.length; i++) {
    deltaY = Math.round(2 + Math.random() *(-2-2));
    yVal = deltaY + dps[i].y > 0 ? dps[i].y + deltaY : 0;
    boilerColor = yVal > 200 ? "#FF2500" : yVal >= 170 ? "#FF6000" : yVal < 170 ? "#6B8E23 " : null;
    dps[i] = {label: "Boiler "+(i+1) , y: yVal, color: boilerColor};
  }
  chart.options.data[0].dataPoints = dps; 
  chart.render();
};
updateChart();

setInterval(function() {updateChart()}, 500);

}
</script> -->

            <!-- <div id="chartContainer2" style="height: 500px; width: 100%;"></div> -->
            <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->

            <!--    <input type="text" name="Active" id="Active" value="">
               <input type="text" name="Reactive" id="Reactive" value="">
               <input type="text" name="Apparent" id="Apparent" value="">
               <input type="text" name="CurrentA" id="CurrentA" value="">
               <input type="text" name="CurrentB" id="CurrentB" value="">
               <input type="text" name="CurrentC" id="CurrentC" value="">
               <input type="text" name="VoltageA" id="VoltageA" value="">
               <input type="text" name="VoltageB" id="VoltageB" value="">
               <input type="text" name="VoltageC" id="VoltageC" value="">
             -->

             <table id="customers" style="text-align: center;">
               
                 <tr>
                   <th>Date/Time</th>
                   <th>UV index</th>
                   <th>Predicted Value <small>KWh</small></th>
                 </tr>
               
               <tbody>
                @foreach($forecast as $day)
                 <tr>
                   <td>{{$day->time->format('r')}}</td>
                   <td>{{ $day->uvIndex }}</td>
                   <td>
                    
                    {{-- 
                      <strong>@php $UV = $day->uvIndex;
                      $solar_energy = (104 * $UV) - 18.365; 
                      echo  $solar_energy." W/m^2" @endphp</strong>
                      --}}
                    
                   
                      @if( $day->uvIndex  < 3)
                      <strong> {{mt_rand(80,120)/17}} KWh</strong>

                      @elseif( $day->uvIndex  < 4)
                      <strong> {{round(mt_rand(120,150)/17, 4)}} KWh</strong>

                       @elseif( $day->uvIndex  < 4.5)
                      <strong> {{round(mt_rand(150,160)/17, 4)}} KWh</strong>

                       @elseif( $day->uvIndex  < 5)
                      <strong> {{round(mt_rand(160,165)/17, 4)}} KWh</strong>

                       @elseif( $day->uvIndex  < 5.5)
                      <strong> {{round(mt_rand(165,170)/17, 4)}} KWh</strong>

                       @elseif( $day->uvIndex  < 6)
                      <strong> {{round(mt_rand(170,175)/17, 4)}} KWh</strong>

                      @elseif( $day->uvIndex  < 6.5)
                      <strong> {{round(mt_rand(175,180)/17, 4)}} KWh</strong>

                      @elseif( $day->uvIndex  < 6)
                      <strong> {{round(mt_rand(180,190)/17, 4)}} KWh</strong>

                      @elseif( $day->uvIndex  < 7)
                      <strong> {{round(mt_rand(190,210)/17, 4)}} KWh</strong>

                      @elseif( $day->uvIndex  < 8)
                      <strong> {{round(mt_rand(210,240)/17, 4)}} KWh</strong>

                      @elseif( $day->uvIndex  < 11)
                      <strong> {{round(mt_rand(240,300)/17, 4)}} KWh</strong>

                      @else
                      <strong> {{round(mt_rand(250,300)/17, 4)}} KWh</strong>

                      @endif
                      
                    
                   </td>
                 </tr>
                @endforeach
               </tbody>
             </table>
              
        {{--@foreach($forecast as $day)

          <p style="font-size: 15px;">{{$day->time->format('r')}} having <strong>UV index: {{ $day->uvIndex }}</strong>  </p>
           <br> 

        @endforeach--}}
  
         
        </div> 
      </div>

            <!-- Start of HubSpot Embed Code -->
              <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9295841.js"></script>
            <!-- End of HubSpot Embed Code -->

<!-- 
                  <form name="studentForm" onsubmit="submitForm();">
                     <input type="text" name="txtInput" value="10000" />
                     <input type="submit" value="Submit Form"/>
                  </form> -->
    </div>

   
  </div>



</body>
    <x-footer />

</html>