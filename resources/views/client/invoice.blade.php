<!DOCTYPE html>
<html>
<head>
  <title>CLient Dashboard</title>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<script src="https://kit.fontawesome.com/3abc9acfee.js" crossorigin="anonymous"></script>

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

<script >
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/client/cstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Favicon -->
<!--     <link rel="icon" href="./images/favicon.png" type="<?php echo url('/'); ?>/images/x-icon" />
 -->
    <!-- Invoice styling -->
    


</head>
<body>

</body>
</html>

<div class="ui-kit-dashboard-client-2" >
  <div class="auto-flex" style="min-height: 1700px;">
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
       <a href="/client/chome"> <div class="home-1">Home</div></a>
      </div>
      <a href="/client/analytics">
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
        <div class="text-1 gotham-book-normal-blue-zodiac-13px">Prediction &amp; Analytics</div>
      </div>
      </a>
      <div class="group-10">
        <img
          class="message-square"
          src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/message-square@1x.png"
        />
       <a href="/client/message"> <div class="messages gotham-book-normal-blue-zodiac-13px">Weather Forecast</div></a>
      </div>
      <div class="group-11">
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
      <div class="group-12" style="    --bali-hai: rgba(136, 152, 170, 1);
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
        <div class="user">
          
          <i style="color: rgba(17, 205, 239, 1);" class="fas fa-file-invoice fa-2x"></i>
        </div>
        <a href="/client/invoice"><div class="profile gotham-book-normal-blue-zodiac-13px">Invoice</div></a>
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
            <div class="ellipse-341 border-class-5"></div>
            <img
              class="path-445"
              src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/path-445@1x.png"
            />
          </div>
        </div>
        <div class="settings-1 gotham-book-normal-blue-zodiac-13px">Settings</div>
      </div> -->
    </div>
    <div class="overlap-group13">
      <div class="rectangle-1493" ></div>
    
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
        <div class="home-3 gotham-book-normal-black-11px">Invoice</div>
        <div class="text-2 gotham-book-normal-black-11px">-</div>
        <div class="dashboard-1 gotham-book-normal-black-11px">Dashboard</div>
      </div>
      <div class="overlap-group">
        <div class="group-9845">
          <div class="auto-flex3">
            <div class="energy-produced gotham-medium-bali-hai-11px">ENERGY PRODUCED</div>
            <div class="address gotham-book-normal-trout-18px" id="Active Power"><!--500 Watt--></div>
            <div class="auto-flex2">
              <div class="text-3"><!--+3.48%--></div>
              <div class="today-progress">Today Progress</div>
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
            <div class="energy-used gotham-medium-bali-hai-11px">ENERGY USED</div>
            <div class="address gotham-book-normal-trout-18px"  id="Reactive Power" >99 watt</div>
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
        <div class="group-984">
          <div class="performance gotham-medium-bali-hai-11px">PERFORMANCE</div>
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

      <div class="group-9856" style="min-height: 1200px;">


<!--       <img style="margin-right: 250px;" src="https://www.theweather.com/wimages/foto1673edf8a43ca9cb51d3e4fb371ac242.png">
 -->      
 <!-- <button onclick="window.print()">Print this page</button> -->
   
        <div class="auto-flex4"  style="min-height:900px;">
  <div id="printableArea" style="margin: auto;">
    <style>


      .invoice-box {
        min-width: 1000px;
        min-height: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
      }

      .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
        border-collapse: collapse;
      }

      .invoice-box table td {
        padding: 5px;
        vertical-align: top;
      }

      .invoice-box table tr td:nth-child(2) {
        text-align: right;
      }

      .invoice-box table tr.top table td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
      }

      .invoice-box table tr.information table td {
        padding-bottom: 40px;
      }

      .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
      }

      .invoice-box table tr.details td {
        padding-bottom: 20px;
      }

      .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
      }

      .invoice-box table tr.item.last td {
        border-bottom: none;
      }

      .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
      }

      @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
          width: 100%;
          display: block;
          text-align: center;
        }

        .invoice-box table tr.information table td {
          width: 100%;
          display: block;
          text-align: center;
        }
      }
    </style>
                      <div class="invoice-box">
                        <table>
                          <tr class="top">
                            <td colspan="4">
                              <table>
                                <tr>
                                  <td class="title">
                                    <img src="<?php echo url('/'); ?>/images/black-and-red-laser-games-logo123@1x.png"  alt="Company logo" style="width: 100%; max-width: 200px" />
                                  </td>

                                  <td>
                                    <br />
                                    <b>Created:</b> {{$created_at}}<br /><br />

                                    @foreach($vendors as $vendor)
                                    <b>Company:</b> {{$vendor->company_name}}<br />
                                    <b>Phone:</b> {{$vendor->phone}}<br />
                                    
                                    @endforeach
                                    <br />
                                    @foreach($users as $user)
                                    <b>Name: </b>{{$user->name}}<br />
                                    <b>Email: </b>{{$user->email}}<br />
                                    
                                    @endforeach
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>

                       

                          <tr class="heading">
                            <td colspan="2">Payment Method</td>

                            <td colspan="2"></td>
                          </tr>

                          <tr class="details">
                            <td colspan="2">Cash</td>

                            <td colspan="2"></td>
                          </tr>

                          <tr class="heading">
                            <td>Item</td>
                            <td>Unit Price</td>
                            <td  style="text-align: right;">Quantity</td>
                            <td style="text-align: right;">Total</td>
                          </tr>
                          @php 
                            $subtotal=0;
                          @endphp
                          @foreach($invoices as $invoice)
                          <tr class="item">
                            <td>{{$invoice->product_name}}</td>
                            <td>{{$invoice->rate}}</td>
                            <td  style="text-align: right;">{{$invoice->quantity}}</td>
                            <td  style="text-align: right;">
                               @php 
                                  $total = $invoice->quantity * $invoice->rate;
                                  echo $total; 
                                  $subtotal = $subtotal + $total;
                               @endphp
                            </td>
                          </tr>
                          @endforeach
                          

                          <tr style="background-color: black; color: white; " class="total">
                            <td  colspan="3" style="text-align: right;"><b>Total</b></td>
                           
                            <td  colspan="1" style="text-align: right;"><b>@php echo $subtotal; @endphp</b></td>
                          </tr>
                        </table>
                      </div>
        </div>

<button onclick="printDiv('printableArea')" type="button" class="btn btn-danger btn-lg"  style="    margin-left: 900px;
    margin-bottom: 30px;">
  
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg>
   Print Bill
</button>

        <!--  <div class="overlap-group9">
            <p class="text-11">Statistics on the basis of Energy consumption and Energy production</p>
            <h1 class="energy-stats">Energy Stats</h1>
          </div>
          <img
            class="line-105"
            src="https://anima-uploads.s3.amazonaws.com/projects/600938d4c724c6fa4b15fe75/releases/60093961ed5773972d28ed98/img/line-105@1x.png"
          />-->
        </div>
        
        <div class="auto-flex6" style="margin-top: 100px;">

          <div class="auto-flex5">

            <iframe
              width="1000"
              height="300"
              zoom="true"
              style="border:0"
              loading="lazy"
              allowfullscreen
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBKr7E0LsDPMKM9LjIlv7REXzmZat9mJhA&q=Azam+Garden">
            </iframe>
<!-- 
<div>
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/invoice.css" media="all" />

   <header class="clearfix">
      <div id="logo">
        <img src="<?php echo url('/'); ?>/css/logo.png">
      </div>
      <div id="company">
        <h2 class="name">Company Name</h2>
        <div>455 Foggy Heights, AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name">John Doe</h2>
          <div class="address">796 Silver Harbour, TX 79273, US</div>
          <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
        </div>
        <div id="invoice">
          <h1>INVOICE 3-2-1</h1>
          <div class="date">Date of Invoice: 01/06/2014</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">30</td>
            <td class="total">$1,200.00</td>
          </tr>
          <tr>
            <td class="no">02</td>
            <td class="desc"><h3>Website Development</h3>Developing a Content Management System-based Website</td>
            <td class="unit">$40.00</td>
            <td class="qty">80</td>
            <td class="total">$3,200.00</td>
          </tr>
          <tr>
            <td class="no">03</td>
            <td class="desc"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
            <td class="unit">$40.00</td>
            <td class="qty">20</td>
            <td class="total">$800.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>$5,200.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 25%</td>
            <td>$1,300.00</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
</div> -->
              
           <!-- <div class="number montserrat-normal-dove-gray-12px">60</div>
            <div class="number-1 montserrat-normal-dove-gray-12px">50</div>
            <div class="number-2 montserrat-normal-dove-gray-12px">40</div>
            <div class="number-3 montserrat-normal-dove-gray-12px">30</div>
            <div class="number-4 montserrat-normal-dove-gray-12px">20</div>
            <div class="number-5 montserrat-normal-dove-gray-12px">10</div>
            <div class="number-6 montserrat-normal-dove-gray-12px">0</div>-->
          </div>
          <div class="overlap-group7" >
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
          </div>
        </div>
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
        <div class="group-80">
          <!--<div class="ellipse-51"></div>
          <div class="consumption montserrat-normal-dove-gray-12px">Consumption</div>
          <div class="ellipse-67"></div>
          <div class="production montserrat-normal-dove-gray-12px">Production</div>-->
        </div>
      </div>
      <div class="overlap-group1">
        <div class="group-9847">
          <div class="overlap-group3">
            <div class="recommendations gotham-medium-bali-hai-11px">RECOMMENDATIONS</div>
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
          <div class="remaining-time gotham-medium-bali-hai-11px">remaining time</div>
        </div>
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
 <!--  <div class="auto-flex1">
    <div class="group-9849">
      <div class="overlap-group6-1">
        <div class="rectangle-1496"></div>
        <div class="overview gotham-medium-bali-hai-11px">OVERVIEW</div>
        <div class="energy-production">Weather forecast</div>
         <div class="group-28">
          <div class="group-22"><div class="month">Month</div></div>
          <div class="group-23 blue-marguerite-border-1px"><div class="week">Week</div></div>
        </div> 
        <div class="group-27">-->
<!--         
<script type="text/javascript">
  function getUVIndex() {
 var lat = $('31.17').val();
 var lng = $('72.71').val();
 // var alt = $('#alt').val();
 // var ozone = $('#ozone').val();
 var dt = $('2021-05-31T06:38:51.356Z').val();

 $.ajax({
   type: 'GET',
   dataType: 'json',
   beforeSend: function(request) {
     request.setRequestHeader('x-access-token', 'e02b0ab8c9dd376076dcdc6086e7b76f');
   },
   url: 'https://api.openuv.io/api/v1/uv?lat=' + lat + '&lng=' + lng  + '&dt=' + dt
   success: function(response) {
    $uv =  response->result->uv;
     document.getElementById("uv").innerHTML = $uv;
   },
   error: function(response) {
     // handle error response
   }
 });
}
</script>-->


        <!--

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
        </div>
      </div>
    </div>
    <div class="overlap-group3-1">
      <div class="trafic-sources">
        <div class="title">Energy Load</div>
        <div class="line"></div>
        <div class="overlap-group5-9">
          <div class="chart">
            <div class="overlap-group-1">

              <img
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
                  <div class="x22628">38%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="chart">
            <div class="overlap-group-1">
              <img
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
      <div class="text-13 roboto-normal-black-35px">15%</div>
      <div class="text-14 roboto-normal-black-35px">35%</div>
      <div class="text-15 roboto-normal-black-35px">50%</div>
    </div> </div> --> 
      <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9295841.js"></script>
<!-- End of HubSpot Embed Code -->

 

</div>
  <x-footer />

