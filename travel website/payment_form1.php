<?php

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$code = $_POST['code'];
$cardnumber = $_POST['cardnumber'];
$month = $_POST['month'];
$year = $_POST['year'];
$cvv = $_POST['cvv'];


$connection = new mysqli('localhost','root','','book_db');
if($connection->connect_error){
    die('Connection Failed: '.$connection->connect_error);
}
else{
    $stmt = $connection->prepare( " insert into payment_form(name, email, address, city, state, code,cardnumber,month,year,cvv) values(?,?,?,?,?,?,?,?,?,?) ");
    $stmt->bind_param("sssssiiiii",$name,$email,$address,$city,$state,$code,$cardnumber,$month,$year,$cvv);
    $stmt->execute();
    echo "Submited successfully";
    $stmt->close();
    $connection->close();
}







?>