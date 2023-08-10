<?php
    class Orders{

        // Connection
        private $conn;

        // Table
        private $db_table = "product_orders";

        // Columns  
        public $id;
        public $order_id;
        public $product_name;
        public $options;
        public $table_no; 
        public $quantity;
        public $order_date;
        public $order_time; 
        public $robot_status;
        public $date_time;
        public $seq;
        public $dong; 
        public $ho;
        public $order_name;


        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getOrders(){  
            $sqlQuery = "SELECT id, order_id, product_name, options, table_no, quantity, order_date, order_time, robot_status, date_time, seq, dong, 
            ho, order_name FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createOrder(){

            //delete the order if exisit
            $this->deleteOrder();

            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                    order_id = :order_id, 
                    product_name = :product_name, 
                    options = :options, 
                    table_no = :table_no, 
                    quantity = :quantity,
                    order_date = :order_date,
                    order_time = :order_time,
                    date_time = :date_time,
                    seq = :seq,
                    dong = :dong,
                    ho = :ho,
                    order_name = :order_name";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->order_id=htmlspecialchars(strip_tags($this->order_id));
            $this->product_name=htmlspecialchars(strip_tags($this->product_name));
            $this->options=htmlspecialchars(strip_tags($this->options));
            $this->table_no=htmlspecialchars(strip_tags($this->table_no));
            $this->quantity=htmlspecialchars(strip_tags($this->quantity));
            $this->order_date=htmlspecialchars(strip_tags($this->order_date));
            $this->order_time=htmlspecialchars(strip_tags($this->order_time));
            $this->date_time=htmlspecialchars(strip_tags($this->date_time));
            $this->seq=htmlspecialchars(strip_tags($this->seq));
            $this->dong=htmlspecialchars(strip_tags($this->dong));
            $this->ho=htmlspecialchars(strip_tags($this->ho));
            $this->order_name=htmlspecialchars(strip_tags($this->order_name));

            // bind data
            $stmt->bindParam(":order_id", $this->order_id);
            $stmt->bindParam(":product_name", $this->product_name);
            $stmt->bindParam(":options", $this->options);
            $stmt->bindParam(":table_no", $this->table_no);
            $stmt->bindParam(":quantity", $this->quantity);
            $stmt->bindParam(":order_date", $this->order_date);
            $stmt->bindParam(":order_time", $this->order_time);
            $stmt->bindParam(":date_time", $this->date_time);
            $stmt->bindParam(":seq", $this->seq);
            $stmt->bindParam(":dong", $this->dong);
            $stmt->bindParam(":ho", $this->ho);
            $stmt->bindParam(":order_name", $this->order_name);

            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // GET ONE
        public function getSingleOrder(){
            $sqlQuery = "SELECT
                        id, order_id, product_name, options, table_no, quantity, order_date, order_time, robot_status, date_time, seq, dong, ho, order_name 
                      FROM
                        ". $this->db_table ."
                    WHERE 
                    order_id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery); 
            $stmt->bindParam(1, $this->order_id); 
            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC); 
    
            $this->order_id = $dataRow['order_id'];
            $this->product_name = $dataRow['product_name'];
            $this->options = $dataRow['options'];
            $this->table_no = $dataRow['table_no'];
            $this->quantity = $dataRow['quantity'];
            $this->order_date = $dataRow['order_date'];
            $this->order_time = $dataRow['order_time'];
            $this->robot_status = $dataRow['robot_status'];
            $this->date_time = $dataRow['date_time'];
            $this->seq = $dataRow['seq'];
            $this->dong = $dataRow['dong'];
            $this->ho = $dataRow['ho'];
            $this->order_name = $dataRow['order_name'];
        }        

        // UPDATE
        public function updateOrder(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET  
                    product_name = :product_name, 
                    options = :options, 
                    table_no = :table_no, 
                    quantity = :quantity,
                    order_date = :order_date,
                    order_time = :order_time,
                    date_time = :date_time,
                    seq = :seq,
                    dong = :dong,
                    ho = :ho,
                    order_name = :order_name
                    WHERE 
                    order_id = :order_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
          // sanitize
          $this->order_id=htmlspecialchars(strip_tags($this->order_id));
          $this->product_name=htmlspecialchars(strip_tags($this->product_name));
          $this->options=htmlspecialchars(strip_tags($this->options));
          $this->table_no=htmlspecialchars(strip_tags($this->table_no));
          $this->quantity=htmlspecialchars(strip_tags($this->quantity));
          $this->order_date=htmlspecialchars(strip_tags($this->order_date));
          $this->order_time=htmlspecialchars(strip_tags($this->order_time));
          $this->date_time=htmlspecialchars(strip_tags($this->date_time));
          $this->seq=htmlspecialchars(strip_tags($this->seq));
          $this->dong=htmlspecialchars(strip_tags($this->dong));
          $this->ho=htmlspecialchars(strip_tags($this->ho));
          $this->order_name=htmlspecialchars(strip_tags($this->order_name));

          // bind data
          $stmt->bindParam(":order_id", $this->order_id);
          $stmt->bindParam(":product_name", $this->product_name);
          $stmt->bindParam(":options", $this->options);
          $stmt->bindParam(":table_no", $this->table_no);
          $stmt->bindParam(":quantity", $this->quantity);
          $stmt->bindParam(":order_date", $this->order_date);
          $stmt->bindParam(":order_time", $this->order_time);
          $stmt->bindParam(":date_time", $this->date_time);
          $stmt->bindParam(":seq", $this->seq);
          $stmt->bindParam(":dong", $this->dong);
          $stmt->bindParam(":ho", $this->ho);
          $stmt->bindParam(":order_name", $this->order_name);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function deleteOrder(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE order_id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->order_id=htmlspecialchars(strip_tags($this->order_id));
        
            $stmt->bindParam(1, $this->order_id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>

