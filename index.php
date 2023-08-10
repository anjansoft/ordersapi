<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orders</title>
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> 
</head>

<body> 
<?php
session_start();
$url = "http://localhost/orders/api/read.php"; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); 
curl_close($ch);
$result = json_decode($result, true);  
?> 
<div>
  <table id="example" class="table table-striped">
    <thead>
        <tr>
            <th>OrderID</th> 
            <th>ProductName</th> 
            <th>Options</th> 
            <th>TableNo</th> 
            <th>Quantity</th> 
            <th>OrderDate</th> 
            <th>OrderTime</th> 
            <th>RobotStatus</th>
            <th>DateTime</th>
            <th>Seq</th>
            <th>Dong</th>
            <th>Ho</th>
            <th>OrderName</th>
        </tr>
    </thead>
    <tbody>
          <?php foreach ($result['body'] as $list) { 
          ?>
          <tr>  
            <td><?php echo $list['order_id'] ?></td> 
            <td><?php echo $list['product_name'] ?></td> 
            <td><?php echo $list['options'] ?></td> 
            <td><?php echo $list['table_no'] ?></td> 
            <td><?php echo $list['quantity'] ?></td> 
            <td><?php echo $list['order_date'] ?></td> 
            <td><?php echo $list['order_time'] ?></td>
            <td><?php echo $list['robot_status'] ?></td>
            <td><?php echo $list['date_time'] ?></td>
            <td><?php echo $list['seq'] ?></td>
            <td><?php echo $list['dong'] ?></td>
            <td><?php echo $list['ho'] ?></td>   
            <td><?php echo $list['order_name'] ?></td>
          </tr> 
          <?php

          } ?>

    </tfoot>
  </table>
</div>
<script>
  new DataTable('#example');
</script>
</body>

</html>