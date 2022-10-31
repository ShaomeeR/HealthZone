<?php
$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$chat=$_POST['chat'];
//Database connection

$conn= new mysqli('localhost','root','','New');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("Insert into registration(fullname,phone,chat)values(?,?,?,)");
    $stmt->bind_param("sis",$fullname,$phone,$chat,);
    $stmt->execute();
    echo"registration successfully";
    $stmt->close();
    
}


?>