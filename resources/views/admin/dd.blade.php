<?php

$conn = mysqli_connect("localhost","root","","registration") or die("Connection Failed");

$sql = "SELECT * FROM device ";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = "";

if(mysqli_num_rows($result) > 0 ){
  $output .= '<table border="0" width="100%"  cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Name</th>
                <th width="90px">Quantity</th>
                <th width="90px">Price</th>
              </tr>';


  while($user = mysqli_fetch_assoc($result)){
    $output .= "<tr>
                  <td align='center'> {$user['id']}</td>
                  <td align='center'>{$user['name']}</td>
                  <td align='center'>{$user['quan']}</td>
                  <td>{$user['price']}</td>
                  
                </tr>";


                 

  }    
   $output .= "</table>";

   echo $output;
}else{
    echo "No Record Found.";
}
?>