<?php

include('connect1.php');
//$name = $_POST['name'];
$email = $_POST['email'];


$sql="select * from users where  email='$email'";

      $res=mysqli_query($mysqli,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
            	echo "email already exists";
        }
		
		}
else{
	echo "welcome";
//do your insert code here or do something (run your code)
}

?>
