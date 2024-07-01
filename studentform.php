<?php 
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <style>
            .sectionone{
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 50%;
                background-color: #000019;
                box-shadow: 10px;
            }
            .s-1heading{
                text-align:center;
                margin-top:100px; 
            }
            h2{
                font-size: 40px;
                color: #c4c4c4;
                text-transform: capitalize;
            }
            .college_logo{
                margin-top: 50px;
                margin-bottom:50px;
                background-color: #fff;
                border-radius: 100px;
            }
            .message{
                font-size: 30px;
                word-spacing: 2px;
                font-style: italic;
                color: #c4c4c4;
            }
            .sectiontwo{
                position: absolute;
                float: right;
                top: 0;
                left: 50%;
                height: 100%;
                width: 50%;
                background-color: #c4c4c4;
            }
            .mainbox{
                margin-top: 25%;
                background-color: #fff;
                width: 50%;
                height: 50%;
                border-radius: 50px;
            }
            .s-2heading{
                font-size: 40px;
                font-style: oblique;
                
            }
            table{
                padding: 20px;
            }
            .emaildiv{
                margin-top: 50px;
            }
            tr{
                margin: 100px;;
            }
            .submitdiv{
                margin-top:20px;
            }
            .btn{
                background-color: #000019;
                width: 75%;
                height: 30px;
                color: #c4c4c4;
            }
            form{
                width: 100%;
            }
            form .input_text{
                margin-top:50px;
                margin-bottom: 30px;
                margin-right: 40px;
                display: flex;
                align-items: center;
            }
            label{
                text-transform: capitalize;
                 width:200px;
            }
            input{
                height: 30px;
                
            }
        </style>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <section class="sectionone">
            <div class="s-1heading">
                <h2>Deccan college student&#39;s login</h2>
            </div>
            <center>
            <div class="s-1logo">
                <img src="resources/css/img/stamp2.png" class="college_logo" alt="college logo">
                <p class="message">register yourself before login</p>
            </div>
            </center>
        </section>
        <section class="sectiontwo">
            <center>
            <div class="mainbox">
            <div class="s-2heading">login</div>
            <hr>
            <form class="form" action="#" method="post">
                    
                <div class="input_text">
                    <label class="email">email:</label>
                    <input type="text" placeholder="enter your emailid" class="mail" name="email">
                </div>
                    
                <div class="input_text">
                    <label class="security">password:</label>
                    <input type="password" placeholder="enter your password" class="pass" name="password">
                </div>
                <hr>
                <div class="submitdiv">
                    <input type="submit" value="Log In" class="btn" name="submitdata">
                </div>
            </form>

    <?php
    if(isset($_POST['submitdata'])){
        $email=$_POST['email'];
        $pwd=$_POST['password'];
        $query="select * from studentsdetails where email='$email' and password='$pwd'";
        $data=mysqli_query($connection,$query);
        $rows=mysqli_num_rows($data);
        //echo $rows; 
       if($rows==1){
           $res=mysqli_fetch_assoc($data);
           $name1=$res['firstname'];
           $name2=$res['lastname'];
           $course=$res['course'];
           $rollno=$res['rollno'];
           $gender=$res['gender'];
           $phoneno=$res['phoneno'];
           $dob=$res['DOB'];
           $name=$name1." ".$name2;
           //echo $name;
           //echo "login succussful";
           $_SESSION['name']=$name;
           $_SESSION['course']=$course;
           $_SESSION['gender']=$gender;
           $_SESSION['rollno']=$rollno;
           $_SESSION['phoneno']=$phoneno;
           header('location:profile.php');
       } else{
           echo "enter the right data";
       }
    }
    ?>
    </boby>  
</html>