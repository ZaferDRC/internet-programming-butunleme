<?php 

try{
    $baglandb = new PDO("mysql:host=127.0.0.1;dbname=finaldb;charset=utf8",'root','toor');
}
catch(PDOException $e){
    echo "Connection Failed" . $e ->getMessage();
    die();
}

?>