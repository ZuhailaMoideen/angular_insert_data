<?php
$mysqli = mysqli_connect("localhost","root","","angular_insert");
 $info = (array)json_decode(file_get_contents("php://input")); 
if(count($info) > 0)
{
   
    $name = mysqli_real_escape_string($mysqli, $info['name']);
    $email = mysqli_real_escape_string($mysqli, $info['email']);
    $age = mysqli_real_escape_string($mysqli, $info['age']);
    $time = mysqli_real_escape_string($mysqli, $info['time']);

    $query = "INSERT INTO emp_info( name , email ,age , time) VALUES('$name','$email','$age','$time')"; 
     
    if(mysqli_query($mysqli,$query))
    {
        echo "Data inserted successfully";
    }
    else
    {
       echo "Failed";
    }
}

?>


