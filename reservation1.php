<?php 
    include('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    $rooms=$_POST['rooms'];

    $sql="INSERT INTO book values ('$name', '$email','$phone','$cin','$cout','$rooms')";
    if($con->query($sql)===TRUE){
        echo "we will get back to you shortly ";

    }
    else{
        echo "error";
    }

$con->close();
    





?>