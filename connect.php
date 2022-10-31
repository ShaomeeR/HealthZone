<?php

$fname= $_POST('fname');
$number= $_POST('number');
$email= $_POST('email');


//Database connection
$conn= new mysqli('localhost','root','','consultation');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
  stmt = $conn->prepare("Insert into registration(fname,number,email)  value (?,?,?)");
    stmt ->bind_param("sis",$fname,$number,$email);
    stmt->execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}







?>