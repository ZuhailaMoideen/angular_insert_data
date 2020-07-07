<?php

require '../dbconfig.php';
   $request= file_get_contents("php://input");
    $info = json_decode($request);
   
   




if(count($info) > 0)
{

    $name = mysqli_real_escape_string($mysqli, $info -> name);
    $email= mysqli_real_escape_string($mysqli, $info -> email);
    $age= mysqli_real_escape_string($mysqli, $info -> age);

    
    $query = "INSERT INTO emp_info ( `name` , `email` , `age`) VALUES('$name','$email','$age')";
    $result = $mysqli->query($query);
    if(mysql_query($mysqli,$result)
    {
        echo "Data inserted successfully";
    }
    else
    {
       echo "Failed";
    }

}

?>


