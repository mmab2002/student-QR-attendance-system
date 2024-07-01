<!DOCTYPE html>
<html lang="en">
    <head>
<title> ADD TEACHER</title>
        
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

    <nav class="nav">
        <img src="resources/css/img/stamp.jpg" class="img" alt="logo">
        <ul><li><a href="csehome.html" >home</a></li>
        <li><a href="AdminDashboard.html" >go back</a></li>
        <li><a href="teachers.php" >list of teacher</a></li></ul></nav>
        <section class="studentsdetails">
        <div class="container">
        <div class="row row_style">
        <div class="col-xs-5">
        <div class="panel panel-primary panelcolor">
        <div class="panel-heading">
        <h4>Teacher Details</h4></div>
        <div class="panel-body">
        <form action="#" method="POST">
        <div class="container">
            <div class="input_text">
            <label>Teacher First Name:</label>
            <input type="text" placeholder="enter teacher's first name" name="tfname" >
            </div>
                
            <div class="input_text">
            <label>Teacher Last Name:</label>
            <input type="text" placeholder="enter teacher's last name" name="tlname" >
            </div>
            
            <div class="input_text">
            <label>teacher id</label>
            <input type="number" placeholder="101" name="tid">
            </div>
            
            <div class="input_text">
            <label>phone no:</label>
            <input type="text" placeholder="10 digit number" name="tphoneno" >
            </div>
            
            <div class="input_text">
            <label>gender:</label>
            <em><input type="radio" name="r1" value="male" checked> male | <input type="radio" name="r1" value="female"> female | <input type="radio" name="r1" value="others"> others</em>
            </div>
            
            <div class="input_text">
            <label>date of birth:</label>
            <input type="date" class="date" name="tDOB" >
            </div>
            
            <div class="input_text">
            <label>email:</label>
            <input type="email" placeholder="teacherid@deccanteh.com" name="temail" >
            </div>
            
            <div class="input_text">
            <label>password:</label> 
            <input type="text" placeholder="tehid+tdcetcse" name="tpassword" >
            </div>
            <div class="input_text">
            <label>upload pic:</label>
            <input type="file"  placeholder="select student pic" name="file">
            </div>
            
            <div class="input_text">
            <label>address:</label>
            <textarea name="taddress"></textarea>
            </div>
            
            <input type="submit" class="btn btn-primary" value="submit teachers data" name="submitdata" >
            
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
        $fname     =   $_POST['tfname'];
        $lname     =   $_POST['tlname'];
        $id        =   $_POST['tid'];
        $phoneno   =   $_POST['tphoneno'];
        $gender    =   $_POST['r1'];
        $dob       =   $_POST['tDOB'];
        $email     =   $_POST['temail'];
        $password  =   $_POST['tpassword'];
        $address   =   $_POST['taddress'];
            
        $query = "insert into teacherdetails (id,firstname,lastname,gender,DOB,phoneno,address,email,password) values('$id','$fname','$lname','$gender','$dob','$phoneno','$address','$email','$password')";
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