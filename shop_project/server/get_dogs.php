<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='dogs' LIMIT 4");

$stmt->execute();


$dogs = $stmt->get_result();//[]





?>