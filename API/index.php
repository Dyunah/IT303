<?php


echo "Response request method: " . $_SERVER["REQUEST_METHOD"] . "<br>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    
    if (json_last_error() === JSON_ERROR_NONE) {
        echo "Response data: " . json_encode($data);
    } else {
        echo "Failed to decode JSON. Error: " . json_last_error_msg();
    }
}

?>