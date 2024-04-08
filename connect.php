<?php

$con=new mysqli('localhost:3307','Prathamesh','12345','restaurant');

if(!$con){
    
    die(mysqli_error($con));
}

?>