<!DOCTYPE html>
<html>
<head>
  <title>CLient Dashboard</title>



   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

 

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

  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/client/cstyle.css">

<meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">






  <style>
.group-9856 {
    font-family: Arial;
    font-size: 1.50em;
    color: #929292;
}

.report-container {
    border: #E0E0E0 1px solid;
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
.fc-content{
  /*background-color: #fce24c;*/
}
.fc-event-container
{
  color: black;
/*  background-color: black;*/
}
.fc-center{
  color: black;
}
.fc-button{
  size: 60%;
}
.container{
  font-size: 60%;
}
</style>


<script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable:true,
        //  dayMaxEventRows: true, // for all non-TimeGrid views
        //  views: {
        //     timeGrid: {
        //          dayMaxEventRows: 6, // adjust to 6 only for timeGridWeek/timeGridDay
        //      },
        // },

        eventColor: '#378006',
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:'/full-calender',
        eventRender: function(event, element) {
          if (event.color == 'danger') {
              element.css({
                  'background-color': '#333333',
                  'border-color': '#333333'
              });
          }
        },
        selectable:true,
        selectHelper: true,
        select:function(start, end, allDay)
        {
            var title = prompt('Event Title:');

            if(title)
            {
                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                $.ajax({
                    url:"/full-calender/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    success:function(data)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Created Successfully");
                    }
                })
            }
        },
        editable:true,
        eventResize: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"/full-calender/action",
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    id: id,
                    type: 'update'
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Event Updated Successfully");
                }
            })
        },
        eventDrop: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"/full-calender/action",
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    id: id,
                    type: 'update'
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Event Updated Successfully");
                }
            })
        },

        eventClick:function(event)
        {
            if(confirm("Are you sure you want to remove it?"))
            {
                var id = event.id;
                $.ajax({
                    url:"/full-calender/action",
                    type:"POST",
                    data:{
                        id:id,
                        type:"delete"
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Deleted Successfully");
                    }
                })
            }
        }
    });

});
  
</script>


</head>
<body>



<div class="ui-kit-dashboard-client-2">
  <div class="auto-flex">
    <div class="group-173">
      <div class="group-7">
        <div class="dashboard gotham-bold-blue-zodiac-25px">Dashboard</div>
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
      <div class="rand">
        <div class="home">
          <img
            class="path-436"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-436@1x.png"
          />
        </div>
       <a href="/client/chome"><div class="home-1">Home</div></a>
      </div>
      <div class="group-8">
        <div class="package">
          <div class="overlap-group5">
            <img
              class="line-4"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-4-2@1x.png"
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
       <a href="/client/analytics"> <div class="text-1 gotham-book-normal-blue-zodiac-13px">Prediction &amp; Analytics</div></a>
      </div>
      <div class="group-10">
        <img
          class="message-square"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/message-square@1x.png"
        />
       <a href="/client/message"> <div class="messages gotham-book-normal-blue-zodiac-13px">Weather Forecast</div></a>
      </div>
      <div class="group-11"  style="    --bali-hai: rgba(136, 152, 170, 1);
    --blue-zodiac: rgba(23, 43, 77, 1);
    --catskill-white: rgba(241, 243, 249, 1);
    --dove-gray: rgba(112, 112, 112, 1);
    --hunter-green: rgba(22, 22, 22, 1);
    --robins-egg-blue: rgba(17, 205, 239, 1);
    --stack: rgba(141, 141, 141, 1);
    --trout: rgba(77, 79, 92, 1);
   
    vertical-align: baseline;
    background-color: var(--catskill-white);
    border-radius: 5px;
    
    
   
   
    width: 225px;">
        <div class="calendar">
          <div class="overlap-group5-1">
            <div class="rectangle-1480 border-class-4"></div>
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
 <a href="/client/invoice"><div class="profile gotham-book-normal-blue-zodiac-13px">Invoices</div></a>
      </div>

      <div class="group-12">
        <div class="user">
         

          <i style="color: red;" class="fas fa-receipt fa-2x"></i>
        </div>
        <a href="/client/realTimeBill"><div class="profile gotham-book-normal-blue-zodiac-13px">Real-time Bill</div></a>
      </div>

      
     <!--  <div class="group-13">
        <div class="settings">
          <div class="overlap-group5-2">
            <div class="ellipse-341 border-class-5"></div>
            <img
              class="path-445"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-445@1x.png"
            />
          </div>
        </div>
        <div class="settings-1 gotham-book-normal-blue-zodiac-13px">Settings</div>
      </div>
 -->    </div>
    <div class="overlap-group13">
      <div class="rectangle-1493" style="left: -4px;"></div>
    
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
      <div class="help-circle border-class-6">
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
        <!--<img
          class="beautiful--nd-1587009"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/beautiful-beauty-blond-1587009@1x.png"
        />-->
        <!--<div class="farhan-elahi">Farhan Elahi</div>-->
        <a href="/logout"> <div class="group-23 blue-marguerite-border-1px" onClick="(function(){ var _hsp = window._hsp = window._hsp || []; _hsp.push(['revokeCookieConsent']); })()">Logout</div></a>
        
      </div>
      <div class="client">{{ session('name') }}</div>

      <div class="group-9844">
        <div class="home-2">
          <img
            class="path-436"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-436-3@1x.png"
          />
        </div>
        <div class="home-3 gotham-book-normal-black-11px">Calender</div>
        <div class="text-2 gotham-book-normal-black-11px">-</div>
        <div class="dashboard-1 gotham-book-normal-black-11px">Dashboard</div>
      </div>
      <div class="overlap-group">
        <div class="group-9845">
          <div class="auto-flex3">
            <div class="energy-produced gotham-medium-bali-hai-11px">ACTIVE POWER</div>
            <div class="address gotham-book-normal-trout-18px" id="Active Power"><!--500 Watt--></div>
            <div class="auto-flex2">
              <div class="text-3"><!--+3.48%--></div>
              <div class="today-progress"><!--Current Progress--></div>
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
      <div class="overlap-group4">
        <div class="group-984">
          <div class="auto-flex2-1">
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
      <div class="overlap-group2">
        {{--
        <a href="../chart.html">
          --}}
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
        <div class="text-17 gotham-book-normal-trout-18px"><a href="/phpfirebase_sdk"><button> Firebase </button></a></div>
      </div>
      <img
        class="black-and--es-logo123"
        src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/black-and-red-laser-games-logo123@1x.png"
      />

      <div class="group-9856">



 

   


<div class="container">
    <br />
    <h1 class="text-center text-dark">Get Production on specific date and time</h1>
    <br />

    <div id="calendar"></div>

</div>
                        
        <!-- <div class="auto-flex4"> -->

        <!--  <div class="overlap-group9">
            <p class="text-11">Statistics on the basis of Energy consumption and Energy production</p>
            <h1 class="energy-stats">Energy Stats</h1>
          </div>
          <img
            class="line-105"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-105@1x.png"
          />-->
        <!-- </div> -->
        <!-- <div class="auto-flex6"> -->
          <!-- <div class="auto-flex5"> -->
           <!-- <div class="number montserrat-normal-dove-gray-12px">60</div>
            <div class="number-1 montserrat-normal-dove-gray-12px">50</div>
            <div class="number-2 montserrat-normal-dove-gray-12px">40</div>
            <div class="number-3 montserrat-normal-dove-gray-12px">30</div>
            <div class="number-4 montserrat-normal-dove-gray-12px">20</div>
            <div class="number-5 montserrat-normal-dove-gray-12px">10</div>
            <div class="number-6 montserrat-normal-dove-gray-12px">0</div>-->
          <!-- </div> -->
          <!-- <div class="overlap-group7"> -->
           <!-- <div class="group-81">
              <div class="overlap-group5-6">
                <img
                  class="line-56"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-56@1x.png"
                />
                <img
                  class="line-57"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-57@1x.png"
                />
                <img
                  class="line-58"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-57@1x.png"
                />
                <img
                  class="line-59"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-57@1x.png"
                />
                <img
                  class="line-60"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-57@1x.png"
                />
                <img
                  class="line-61"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-57@1x.png"
                />
                <img
                  class="line-62"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-57@1x.png"
                />
                <img
                  class="line-63"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-57@1x.png"
                />
              </div>
            </div>-->
           <!-- <div class="ellipse-53"></div>
            <div class="ellipse-54"></div>
            <div class="ellipse-56"></div>
            <div class="ellipse-57"></div>
            <div class="group-79">
              <div class="ellipse-66"></div>
              <div class="ellipse-65"></div>
              <div class="ellipse-64"></div>
              <div class="ellipse-62"></div>
              <div class="ellipse-61"></div>
            </div>-->
            <!--<img
              class="path-380"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-380@1x.png"
            />-->
           <!-- <img
              class="path-379"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-379@1x.png"
            />-->
          <!-- </div> -->
        <!-- </div> -->
        <!--<div class="overlap-group8">
          <img
            class="line-106"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-105@1x.png"
          />
          <div class="date montserrat-normal-dove-gray-10px">00:00</div>
          <div class="date-2 montserrat-normal-dove-gray-10px">06:00</div>
          <div class="date-3 montserrat-normal-dove-gray-10px">12:00</div>
          <div class="date-1 montserrat-normal-dove-gray-10px">15:00</div>
          <div class="date-4 montserrat-normal-dove-gray-10px">18:00</div>
          <div class="date-1 montserrat-normal-dove-gray-10px">15:00</div>
          <div class="date-5 montserrat-normal-dove-gray-10px">21:00</div>
          <div class="text-12 montserrat-normal-dove-gray-10px">24:00</div>
        </div>-->
        <!-- <div class="group-80"> -->
          <!--<div class="ellipse-51"></div>
          <div class="consumption montserrat-normal-dove-gray-12px">Consumption</div>
          <div class="ellipse-67"></div>
          <div class="production montserrat-normal-dove-gray-12px">Production</div>-->
        <!-- </div> -->
      </div>
      </a>
      <div class="overlap-group1">
        
        <div class="group-9847">
          <div class="overlap-group3">
            <div class="recommendations gotham-medium-bali-hai-11px">APPARENT POWER</div>
            <div class="overlap-group6">
              <div class="low-battary gotham-book-normal-trout-18px" id="Apparent Power"><!--Low Battary--></div>
              <div class="text-16 gotham-medium-bali-hai-11px"><!--Reduce the power load--></div>
            </div>
            <div class="overlap-group5-7">
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
          <div class="remaining-time gotham-medium-bali-hai-11px"><!--remaining time--></div>
        </div>
        </a>
        <div class="group-985">
          <img
            class="path-1925"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/arrow-pointing-to-right--3-@1x.png"
          />
        </div>
        <div class="ellipse-377 border-class-2"></div>
        <div class="ellipse-378 border-class-2"></div>
        <div class="ellipse-379 border-class-2"></div>
        <div class="ellipse-380 border-class-2"></div>
        <div class="ellipse-381 border-class-2"></div>
        <div class="ellipse-382 border-class-2"></div>
        <div class="ellipse-383 border-class-2"></div>
        <div class="ellipse-384 border-class-2"></div>
        <div class="date-6"><!--1 hour--></div>
      </div>
    </div>
  </div>
  <div class="auto-flex1">


    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9295841.js"></script>


<!-- End of HubSpot Embed Code -->





 <!--    <div class="group-9849">
      <div class="overlap-group6-1">
        <div class="rectangle-1496"></div>
        <div class="overview gotham-medium-bali-hai-11px">OVERVIEW</div>
        <div class="energy-production">Weather Forecast</div>
        <!-- <div class="group-28">
          <div class="group-22"><div class="month">Month</div></div>
          <div class="group-23 blue-marguerite-border-1px"><div class="week">Week</div></div>
        </div> 
        <div class="group-27">



           <div class="report-container">
                <h2>{{--$name--}} Weather Status</h2>
                <div class="time">
                    <div>{{--$day--}}</div>
                    <div>{{--$date--}}</div>
                    <div>{{--$description--}}</div>
                </div>
                <div class="weather-forecast">
                    <img
                        src="http://openweathermap.org/img/w/{{--$icon--}}.png"
                        class="weather-icon" />{{--$temp_max--}}°C<span
                        class="min-temperature">{{--$temp_min--}}°C</span>
                </div>
                <div class="time">
                    <div>Humidity: {{--$humidity--}} %</div>
                    <div>Wind: {{--$speed--}} km/h</div>
                </div>
          </div>




          <div class="group-25">
            <div class="text-10 gotham-book-normal-bali-hai-11px">60%</div>
            <div class="text-9 gotham-book-normal-bali-hai-11px">50%</div>
            <div class="text- gotham-book-normal-bali-hai-11px">40%</div>
            <div class="text- gotham-book-normal-bali-hai-11px">30%</div>
            <div class="text-6 gotham-book-normal-bali-hai-11px">20%</div>
            <div class="text-5 gotham-book-normal-bali-hai-11px">10%</div>
            <div class="text-4 gotham-book-normal-bali-hai-11px">0%</div>
          </div>
          <div class="auto-flex2-2">
            <div class="overlap-group5-8">
              <div class="group-24">
                <img
                  class="line-28"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-28-4@1x.png"
                />
                <img
                  class="line-"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-28-4@1x.png"
                />
                <img
                  class="line-"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-28-4@1x.png"
                />
                <img
                  class="line-"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-28-4@1x.png"
                />
                <img
                  class="line-"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-28-4@1x.png"
                />
                <img
                  class="line-"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-28-4@1x.png"
                />
                <img
                  class="line-"
                  src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-28-4@1x.png"
                />
              </div>
              <img
                class="path-479"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-479-2@1x.png"
              />
            </div>
            <div class="group-26">
              <div class="name gotham-book-normal-bali-hai-11px">May</div>
              <div class="may gotham-book-normal-bali-hai-11px">Jun</div>
              <div class="may-1 gotham-book-normal-bali-hai-11px">Jul</div>
              <div class="may-2 gotham-book-normal-bali-hai-11px">Aug</div>
              <div class="may-3 gotham-book-normal-bali-hai-11px">Sep</div>
              <div class="may-4 gotham-book-normal-bali-hai-11px">Oct</div>
              <div class="may-5 gotham-book-normal-bali-hai-11px">Nov</div>
              <div class="may-6 gotham-book-normal-bali-hai-11px">Dec</div>
            </div>
          </div>
        <!-- </div> 
      </div>
    </div>
    <div class="overlap-group3-1">
      <div class="trafic-sources">
        <div class="title">Energy Load</div>
        <div class="line"></div>
        <div class="overlap-group5-9">
          <div class="chart">
            <div class="overlap-group-1">
              <!--<img
                class="subtraction-1"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/subtraction-1@1x.png"
              />
              <img
                class="subtraction-2 border-class-1"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/subtraction-2@1x.png"
              />
              <img
                class="subtraction-3"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/subtraction-3@1x.png"
              />
              <img
                class="subtraction-4"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/subtraction-4@1x.png"
              />
              <div class="ellipse-6 border-class-3"></div>
              <div class="text">
                <div class="overlap-group11">
                  <div class="x25-september-2018">Energy Used</div>
                  <div class="x22628"><!--38%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="chart">
            <div class="overlap-group-1">
            <!--  <img
                class="subtraction-1"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/subtraction-1@1x.png"
              />
              <img
                class="subtraction-2 border-class-1"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/subtraction-2@1x.png"
              />
              <img
                class="subtraction-3"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/subtraction-3@1x.png"
              />
              <img
                class="subtraction-4"
                src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/subtraction-4@1x.png"
              />
              <div class="ellipse-6-1 border-class-3"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="ellipse-370 winter-sky-border-1px"></div>
      <div class="ellipse-371"></div>
      <div class="ellipse-372"></div>
      <div class="energy-used-1 gotham-medium-blue-zodiac-13px">Energy Used</div>
      <div class="estimate-produce gotham-medium-blue-zodiac-13px">Estimate Produce</div>
      <div class="energy-produced-1 gotham-medium-blue-zodiac-13px">Energy Produced</div>
      <div class="text-13 roboto-normal-black-35px"><!--15%</div>
      <div class="text-14 roboto-normal-black-35px"><!--35%</div>
      <div class="text-15 roboto-normal-black-35px"><!--50%</div>
    </div>
  </div>
</div> -->
 


</div></div></body></html>



   <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/footer.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> -->

<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<script src="https://kit.fontawesome.com/3abc9acfee.js" crossorigin="anonymous"></script>

  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
              <!-- <li><a class="dribbble" href="#"><i class="fa fa-dribbble fa-2x"></i></a></li> -->
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>


  

   

