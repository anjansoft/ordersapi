<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../config/database.php';
    include_once '../class/orders.php';

    $database = new Database();
    $db = $database->getConnection();

    $items = new Orders($db);

    $stmt = $items->getOrders();
    $itemCount = $stmt->rowCount(); 

    if($itemCount > 0){
        
        $orderArr = array();
        $orderArr["body"] = array();
        $orderArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "order_id" => $order_id,
                "product_name" => $product_name,
                "options" => $options,
                "table_no" => $table_no,
                "quantity" => $quantity,
                "order_date" => $order_date,
                "order_time" => $order_time,
                "robot_status" => $robot_status,
                "date_time" => $date_time,
                "seq" => $seq,
                "dong" => $dong,
                "ho" => $ho,
                "order_name" => $order_name
            );

            array_push($orderArr["body"], $e);
        }

        echo json_encode($orderArr);
    } 
    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>