<!DOCTYPE html>
<html lang="en">
    <head>
<title> ADD STUDENT</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <style>
            .students{
                border:4px ;
                position: absolute;
                top: 35%;
                left:35%;
    
            }
           .studentsdetails{
               border:4px ;
               align-content: center;
               width:36%;
               height: 100%;
               position: absolute;
               top: 50%;
               left:50%;
                  transform: translate(-50%,-25%);
            }
            
            .date{
                width: 15.6%;
            }
            .btn{
                width: 34%;
                background-color:  #2757a2;    
            }
            ul{
                float: right;
             margin-right: 200px;
            text-decoration: none;
                margin-top: 50px;
                list-style: none;
            }
            ul li{
                display: inline-block;
               margin-left:40px;
                 
            }
            ul li a:link, ul li a:visited{
                color:#fff;
                text-decoration: none; 
                text-transform: uppercase;
                font-size:17px;
                border-bottom: 2px solid transparent;
                transition:border-bottom 0.2s;
                padding-bottom: 8px;
            }
            ul li a:hover,ul li a:active{
                 border-bottom:2px solid #f4f40b;
            }
            .panel{
                margin-top: 10px;
            }
            
            body{
                background-color: #f0f0f0;
            }
            nav{
                background-color: #0c3980;
                background: cover;
            }
            .panelcolor .panel-heading{
                text-align: center;
                text-transform: uppercase;
                background-color: #0c3980;
            }
            form{
                width: 100%;
            }
            form .input_text{
                margin-bottom: 15px;
                display: flex;
                align-items: center;
            }
            .img{
             margin-left: 200px;
                margin-top: 15px;
                margin-bottom: 15px;
                height: 110px;
                width: 125px;
                border-radius: 50%;
            }
            label{
                text-transform: capitalize;
                 width:200px;
            }
            .panelcolor .panel-heading{
                background-color: default;
            }
            
        </style>
    </head>
    <body>

    <nav class="nav">
        <img src="resources/css/img/stamp.jpg" class="img" alt="logo">
        <ul><li><a href="index.html" >home</a></li></ul></nav>
        <section class="studentsdetails">
        <div class="container">
        <div class="row row_style">
        <div class="col-xs-5">
        <div class="panel panel-primary panelcolor">
        <div class="panel-heading">
        <h4>student details</h4></div>
        <div class="panel-body">
        <form action="#" method="POST">
        <div class="container">
            <div class="input_text">
            <label>first Name:</label>
            <input type="text" placeholder="enter first name" name="fname" >
            </div>
                
            <div class="input_text">
            <label>Last Name:</label>
            <input type="text" placeholder="enter last name" name="lname" >
            </div>
            
            <div class="input_text">
            <label>rollno:</label>
            <input type="text" placeholder="160319733xxx" name="rollno">
            </div>
            
            <div class="input_text">
            <label>course:</label>
            <input type="text" value="BE" name="course">
            </div>
            
            <div class="input_text">
            <label>phone:</label>
            <input type="text" placeholder="10 digit number" name="phoneno" >
            </div>
            
            <div class="input_text">
            <label>gender:</label>
            <em><input type="radio" name="r1" value="male" checked> male | <input type="radio" name="r1" value="female"> female | <input type="radio" name="r1" value="others"> others</em>
            </div>
            
            <div class="input_text">
            <label>date of birth:</label>
            <input type="date" class="date" name="DOB" >
            </div>
            
            <div class="input_text">
            <label>email:</label>
            <input type="email" placeholder="rollno@deccanstd.com" name="email" >
            </div>
            
            <div class="input_text">
            <label>password:</label> 
            <input type="text" placeholder="30xxdcetcse" name="password" >
            </div>
            <div class="input_text">
            <label>upload pic:</label>
            <input type="file"  placeholder="select student pic" name="file">
            </div>
            
            <div class="input_text">
            <label>address:</label>
            <textarea name="address"></textarea>
            </div>
            
            <input type="submit" class="btn btn-primary" value="submit student data" name="submitdata" >
            
            </div>
        </form>
        </div>
        
        </div>
        </div>
            </div>
            </div>
        </section>
        
       
        <?php
        include("connection.php");
        error_reporting(0);
        if($_POST['submitdata']){
        $pic        = $_POST['file'];
        $fname     =   $_POST['fname'];
        $lname     =   $_POST['lname'];
        $rollno    =   $_POST['rollno'];
        $course    =   $_POST['course'];
        $phoneno   =   $_POST['phoneno'];
        $gender    =   $_POST['r1'];
        $dob       =   $_POST['DOB'];
        $email     =   $_POST['email'];
        $password  =   $_POST['password'];
        $address   =   $_POST['address'];
            
        $query = "insert into studentsdetails (firstname,lastname,rollno,course,gender,DOB,phoneno,address,email,password) values('$fname','$lname','$rollno','$course','$gender','$dob','$phoneno','$address','$email','$password')";
        $q = mysqli_query($connection,$query);
        if($q){
            echo "done";
        }else{
            echo "not done";
        }
            }
        
        
        ?>
    </body>
</html>

       
