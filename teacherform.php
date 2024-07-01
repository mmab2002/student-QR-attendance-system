<!DOCTYPE html>
<html>
<head>
   <!-- <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/1.3%20grid.css.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>teacher login page</title>
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
                  transform: translate(-40%,-10%);
            }
            
            .date{
                width: 15.6%;
            }
            .btn{
                width: 34%;
                background-color:  #01531e;    
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
            
             nav{
            background-color: #57bc57;
        }
        .logo{
             
             margin-left: 200px;
                margin-top: 15px;
                margin-bottom: 15px;
                height: 125px;
                width: 125px;
                border-radius: 50%;
        }
         body{
                background-color: #f0f0f0;
               background-image: linear-gradient(rgba(65, 206, 65, 2.5),rgba(201, 201, 201, 0.7));
              background-size: cover;
              background-position: center;
              height: 100vh;
            }
            .panelcolor .panel-heading{
                text-align: center;
                text-transform: uppercase;
                background-color: #01531e;
            }
            form{
                width: 100%;
            }
            form .input_text{
                margin-bottom: 30px;
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
    <?php
            include("connection.php");
            session_start(); ?>
    <nav class="nav">
        <img src="resources/css/img/stamp.jpg" class="img" alt="logo">
        <ul><li><a href="csehome.html" >home</a></li></ul></nav>
    <section class="studentsdetails">
        <div class="container">
        <div class="row row-style">
            <div class="col-xs-5">
            <div class="panel panel-primary panelcolor">
                <div class="panel-heading ">
                <h3>log in</h3>
                </div>
                <div class="panel-body">
                    <div class="container">
                 <form method="post" action="TeacherDashBoard.html">
                    <div class="input_text">
                <label>
                email:</label>
                <input type="email" name="email" placeholder="enter email id" required></div>
                <div class="input_text">
                <label>password:</label>
                    <input type="password" name="password" placeholder="enter password" required>
                </div>
                <div class="input_text">
                <input type="submit" name="submit" class="btn btn-primary" value="signin" >
                </div>
            </form>
                       <?php 
                        if(isset($_POST['submit'])){
                            $email=$_POST['email'];
                            $pwd=$_POST['password'];
                            $query="select * from teacherdetails where email='$email' and password='$pwd'";
                            $data=mysqli_query($connection,$query);
                            $rows=mysqli_num_rows($data);
                            echo $rows;
                            if($rows==1){
                                
                                header('location:TeacherDashBoard.html');
                                
                            }else{
                                 echo "<script >
                                        alert('enter the right data');
                                        </script>";
                            }
                        }
                        ?>
                </div>
                </div>
            </div>
           
       <!--     <form method="post" action="#" class="login">
            <div class="row">
                <div class="col span-1-of-3">
                    <label>email</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="emailid" id="email" placeholder="enter email id" required>
                </div><div class="row">
                <div class="col span-1-of-3">
                    <label>password</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="password" name="tehpassword" id="password" placeholder="enter password" required>
                </div>
                </div>
                </div>
                <input type="submit" name=tehsubmit id="submitentry">
            </form>-->
            
        </div>
        </div>
    </section>
    
    </body>
</html>