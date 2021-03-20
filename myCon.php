<?php

$password="Akuoma.96";
$user = "root";
$webserver="172.17.0.2:3306";
$db = "myAlertsApp";   

$conn = new mysqli($webserver, $user, $password, $db);  

if($conn->connect_error){
    echo "Connection failed: ".$conn->connect_error;
}
?>