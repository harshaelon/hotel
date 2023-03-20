<?php

 $host="localhost";
 $user="root";
 $password='';
 $db_name="hotel2";


 $con=mysqli_connect($host,$user,$password,$db_name);
 if(mysqli_connect_errno()){
    die("failed to connect with sql: ".mysqli_connect_error());
    
 }



?>