<?php
include("connection.php");
$id=$_GET['id'];
$query= "delete from studentsdetails where sno='$id'";
$data=mysqli_query($connection,$query);
if($data){
    echo "data deleted";
}else
{
    echo "something went wrong";
}
?>