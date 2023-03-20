<?php
    include('connection.php');

    $Fname= $_POST['Fname'];
    $Lname= $_POST['Lname'];
    //$Fname= $_POST['Fname'];
    $dob= $_POST['dob'];
    $Phone= $_POST['Phone'];
    
    $email= $_POST['email'];
    $address= $_POST['address'];

    $sql="INSERT INTO fsd2 values ('$Fname','$Lname','$dob','$Phone','$email','$address')";

    if($con->query($sql)===TRUE){
        echo "we will get back to you shortly";

    }
    else{
        echo "error";
    }

$con->close();



?>