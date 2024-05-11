<?php

$conn = new Database( config() );

$result = $conn->query("SELECT * FROM history WHERE date_created = :date_created AND user_id = :user_id", [ 
    "date_created" => date("Y/m/d"),
    "user_id" => 100 ] )->fetchAll();
$total = 0;

foreach ($result as $row)
{
    $total += $row['product_price'];
}

view("index.view.php",[
    'result' => $result,
    'total' => $total
]);