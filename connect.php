<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];


<?

//database connection using phpMyAdmin

$conn = new mysqli('localhost','root','','test');
if ($conn->connect_error){
    die('Connection Failed  :  '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name, email, number) values(?, ?, ?, ?,");
    $stmt->bind_param("sssi",$name, $email, $number);
    $stmt->execute();
    echo "registration Successful...";
    $stmt->close();
    $conn->close();

}