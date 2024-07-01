<?php
include("connection.php");
$id=$_GET['id'];
$query= "delete from teacherdetails where id='$id'";
$data=mysqli_query($connection,$query);
if($data){
    echo "data deleted";
}else
{
    echo "something went wrong";
}
?>