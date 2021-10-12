<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$number = $_POST['number'];
$birthDay = $_POST['birthDay'];

//Database connection(
$conn = new mysqli('localhost', 'root','','agro');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, message, gender, age, number, birthDay)
values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssiii",$firstName, $lastName, $email, $message, $gender, $age, $number, $birthDay);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>