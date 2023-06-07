<?php
try{
$conn=new mysqli("localhost","root","india@123","s4c");
if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}
}

catch(Exception $e) {
    echo 'Error: ' .$e->getMessage();
}
?>