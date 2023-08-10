<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/orders.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Orders($db);

    $item->order_id = isset($_GET['order_id']) ? $_GET['order_id'] : die();
  
    $item->getSingleOrder(); 

    if($item->order_id != null){
        // create array
        $emp_arr = array(
            "order_id" => $item->order_id,
            "product_name" => $item->product_name,
            "options" => $item->options,
            "table_no" => $item->table_no,
            "quantity" => $item->quantity,
            "order_date" => $item->order_date,
            "order_time" => $item->order_time,
            "robot_status" => $item->robot_status,
            "date_time" => $item->date_time,
            "seq" => $item->seq,
            "dong" => $item->dong,
            "ho" => $item->ho,
            "order_name" => $item->order_name
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Order not found.");
    }
?>