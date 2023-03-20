<?php
include("connect1.php");
$sql="SELECT * FROM feedback";
    if($con->query($sql)===TRUE){
        echo "feedback sent";

    }
    else{
        echo "error";
    }

$con->close();


?>