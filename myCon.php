<?php

$password="Akuoma.96";
$user = "root";
$webserver="127.0.0.1";
$db = "myAlertsApp";

$conn = new mysqli($webserver, $user, $password, $db);  

if($conn->connect_error){
    echo "Connection failed: ".$conn->connect_error;
} else {
    
    echo "IT WORKED";
}
?>