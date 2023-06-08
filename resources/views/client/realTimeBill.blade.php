<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 20px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body style="padding: 50px;">

<h2>Real Time Bill</h2>

<table style="width: 50%; " >
  <tr>
    <th>BreakDown</th>
    <th>kW/h</th>
    
    <th>Price (PKR)</th>
    <th>Total Price (PKR)</th>
  </tr>
  <tr>
    <td>Total Units (kW/h)</td>
    <td>{{$unit}}</td>
    <td>-</td>
    <td></td>
  </tr>
  <tr>
    <td>Subsidized Units (kW/h)</td>
    <td>{{$subsidized}}</td>
    <td>12.5</td>
    <td>{{$initialprice}}</td>
  </tr>
   <tr>
    <td>Non-subsidized Units (kW/h)</td>
    <td>{{$nonsubsidized}}</td>
    <td>19.5</td>
    <td>{{$totalprice}}</td>
  </tr>
  
   <tr>
    <td>Total Bill</td>
    <td></td>
    <td></td>
    <td>{{$finalprice}}</td>
  </tr>
  
</table>



<h2>Bill Amount Saved</h2>

<table style="width: 50%;">
  <tr>
    <th>BreakDown</th>
    <th>kW/h</th>
    
    <th>Price (PKR)</th>
    <th>Total Price (PKR)</th>
  </tr>
  <tr>
    <td>Total Units (kW/h)</td>
    <td>{{$totalunit}}</td>
    <td>-</td>
    <td></td>
  </tr>
   <tr>
    <td>Subsidized Units (kW/h)</td>
    <td>{{$Ssubsidized}}</td>
    <td>12.5</td>
    <td>{{$Sinitialprice}}</td>
  </tr>
   <tr>
    <td>Non-subsidized Units (kW/h)</td>
    <td>{{$Snonsubsidized}}</td>
    <td>19.5</td>
    <td>{{$Stotalprice}}</td>
  </tr>
  
   <tr>
    <td>Total Bill with Solar Units</td>
    <td></td>
    <td></td>
    <td>{{$Sfinalprice}}</td>
  </tr>
  
  <tr>
    <td>Bill avoided due to Solar</td>
    <td></td>
    <td></td>
    <td>{{$Sfinalprice-$finalprice}}</td>
  </tr>
  
</table>


</body>
</html>