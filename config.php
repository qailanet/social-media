<?php

$db_host = "localhost";
$db_user = "sosmed";
$db_pass = "uHGzGfWVUC1TyZW0ZGAXVPgQEVtbqU3UVZNZXy0b";
$db_name = "sosmed";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
