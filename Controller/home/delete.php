<?php

$conn = new Database( config() );

try {   

    $conn->query("DELETE FROM history WHERE id = :id AND user_id = :user_id", [
        'id' => $_POST['id'],
        'user_id' => 100
    ]);

}
catch (Exception $e) {

    redirect('/');

} finally {

    redirect('/');

}