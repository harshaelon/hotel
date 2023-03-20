<?php
    include('connect1.php');
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $subj = $_POST['subj'];
    $feed = $_POST['feed'];

    $sql="INSERT INTO feedback values ('$uname', '$email','$subj','$feed')";
    if($con->query($sql)===TRUE){
        echo "feedback sent";

    }
    else{
        echo "error";
    }

$con->close();

?>