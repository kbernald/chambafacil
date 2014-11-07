<?php
function dbConnect (){
    $conn = null;
    $host = 'localhost';
    $db =   'dbchambafacil';
    $user = 'root';
    $pwd =  '';
    try {
        $conn = new PDO('mysql:host='.$host.';dbname='.$db.";charset=utf8", $user, $pwd);
        //echo 'Connected succesfully.<br>';
    }
    catch (PDOException $e) {
        echo '<p>Cannot connect to database !!</p>';
        exit;
    }
    return $conn;
 }
 
 ?>

