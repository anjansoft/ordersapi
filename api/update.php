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
    
    try
    {   
        $data = json_decode(file_get_contents("php://input"));
        
        // order values
        $item->order_id = $data->order_id;
        $item->product_name = $data->product_name;
        $item->options = $data->options;
        $item->table_no = $data->table_no;
        $item->quantity = $data->quantity;
        $item->order_date = $data->order_date;
        $item->order_time =  $data->order_time;
        $item->date_time =  $data->date_time;
        $item->seq = $data->seq;
        $item->dong = $data->dong;
        $item->ho = $data->ho;
        $item->order_name = $data->order_name; 
        
        if($item->updateOrder()){
            echo json_encode("Order data updated.");
        } else{
            echo json_encode("Data could not be updated");
        }

    }
    catch(Exception $e) {
        echo json_encode("Order could not be updated.");
    }
?>