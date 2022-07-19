<?php
$name =$_POST['name'];
$email =$_POST['email'];
$number =$_POST['number'];
$message = $_POST['message'];
var_dump($name,$email,$number,$message);
$conn = new mysqli('shaun@196.47.210.177','root','mbolomposhaun','tutoring');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
    echo "There is an error";

}else{
    echo "It is here";
    $stmt = $conn->prepare("insert into student(name, email, number, message)
     values(?,?,?,?)");
     $stmt->bind_param("ssis",$name, $email, $number, $message);
     $stmt->execute();
     echo "Success";
     $stmt->close();
     $conn->close();
     echo "Success";
}
?>

