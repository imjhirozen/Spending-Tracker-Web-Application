<?php

$conn = new Database( config() );

$user_id = 100;

try {

    $result = $conn->query("SELECT * FROM history WHERE id = :id AND user_id = :user_id", [
        "id" => $_GET['id'],
        "user_id" => $user_id
    ])->fetch();

} catch (Exception $e) {

    redirect('/');

}

if(empty($result)) redirect('/');

view("edit.view.php", [
    "value" => $result
]);