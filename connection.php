<?php
$servername ="localhost";
$username ="root";
$password ="";
$database="studentattendance";
$connection= mysqli_connect($servername,$username,$password,$database);
if($connection){
    //echo "connected";
}else{
    echo "not connected";
}
?> 
 