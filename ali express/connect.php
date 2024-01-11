<?php 

$con = new mysqli('localhost', 'root', 'root123', 'ecommerce');
if($con){
//echo "connection build";
}
else{
    die (mysqli_error($con));
}
?>
