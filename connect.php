<?php

$con = new mysqli('localhost','root','','positive_compliment_generator');

if(!$con){
    die(mysqli_error($con));
}
?>