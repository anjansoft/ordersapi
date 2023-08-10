# php-rest-api
CRUD (Create, Read, Update, Delete) RESTful API with MySQL database.


## PHP CRUD API
* `GET - http://localhost/api/read.php` Fetch ALL Records
* `GET - localhost/api/single_read.php?order_id=0007` Fetch Single Record
* `POST - http://localhost/api/create.php` Create Record
    {
        "order_id": "0007",
        "product_name": "제품1",
        "options": "",
        "table_no": "3",
        "quantity": "1",
        "order_date": "2023-07-17",
        "order_time": "17:33:31",
        "robot_status": "",
        "date_time": "2023-07-17 17:33:31",
        "seq": "0",
        "dong": "120",
        "ho": "1701",
        "order_name": "주문1"
    }
* `POST - http://localhost/api/update.php` Update Record
    {
        "order_id": "0007",
        "product_name": "제품1",
        "options": "",
        "table_no": "3",
        "quantity": "1",
        "order_date": "2023-07-17",
        "order_time": "17:33:31",
        "robot_status": "",
        "date_time": "2023-07-17 17:33:31",
        "seq": "0",
        "dong": "120",
        "ho": "1701",
        "order_name": "주문1"
    }
* `DELETE - localhost/api/delete.php?order_id=0007` Remove Records
