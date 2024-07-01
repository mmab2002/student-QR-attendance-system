<?php
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pwd=$_POST['password'];
        $query="select * from studentsdetails where email='$email' and password='$pwd'";
        $data=mysqli_query($connection,$query);
        $rows=mysqli_num_rows($data);
        //echo $rows;
    $res=mysqli_fetch_assoc($data);
         $name1=$res['firstname'];
           $name2=$res['lastname'];
    }
    ?>