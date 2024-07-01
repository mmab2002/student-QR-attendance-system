<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Add/Remove Class</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, intial-scale=1">
    </head>
    <style>
         body{
                background-color: #f0f0f0;
            }
            nav{
                background-color: #0c3980;
            }
         .logo{
            margin-left: 300px;
            margin-top: 5px;
            margin-bottom: 15px;
            height: 110px;
            width: 125px;
            border-radius: 50%;
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
        h2{
            padding-top: 4px;
            padding: 0%;
            margin: 0%;
            color:#fff;
            text-transform: uppercase;
            top:15px;
            left:50%;
        }
        strong{
            margin-top: 10px;
        }
             section{
               border:4px ;
               align-content: center;
               width:36%;
               height: 100%;
               position: absolute;
               top: 50%;
               left:50%;
                  transform: translate(-50%,-25%);
        }
         .panel{
                margin-top: 10px;
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
                margin-top: 10px;
                margin-bottom: 15px;
                display: flex;
                align-items: center;
            }
        label{
                text-transform: capitalize;
                 width:200px;
                font-size: 13px;
            }
         .btn{
                width: 100%;
                background-color:  #2757a2;    
            }
        select{
            width: 195px;
            height: 35px;
        }
        .box2{
            position:absolute;
            top:82%;
            left: 10%;
            
        }
        .class{
            width: 195px;
            height: 35px;
        }
         .update 
        {background-color: green;
            color: #fff;
            border: 0;
            outline: none;
            font-weight: 300;
            height: 23px;
            width: 70px;
            cursor: pointer;
            margin: 2px;
            border-radius: 300px;
               
        }
        .delete{
            background-color: red;
        }
    </style>
    <body>
        <nav>
        <center><strong><h2>Making Class</h2></strong></center>
            <a href="index.html"><img src="resources/css/img/stamp.jpg" alt="logo" class="logo"></a>
        <ul>
            <li><a href="csehome.html">home</a></li>
            <li><a href="AdminDashboard.html">go to dashboard</a></li>
            <li><a href="CseAdminLogin.html">log out</a></li>
        </ul>
        </nav>
        <section>
            <?php error_reporting(0); ?>
         <div class="container">
            <div class="row">
             <div class="col-xs-5">
                <div class="panel panel-primary panelcolor">
                 <div class="panel-heading">
                    <h3>allocate class</h3>
                    </div>
                    <form action="#" method="post">
                    <div class="panel-body">
                    
                        <div class="input_text">
                        <label>class name:</label>
                            <input type="text" placeholder="enter class name" class="class" name="class">
                        </div>
        <?php
        include("connection.php");
        $query1 = "select subjectname from listofsubjects ";
        $data1 = mysqli_query($connection,$query1);
        $rowtable1 = mysqli_num_rows($data1);
        //echo $rowtable1."<br>";
        ?>
                        <div class="input_text">
                        <label>choose subject:</label>
                            <select name="subject" required>
                                <option><center>-select-</center></option>
        <?php 
            if($rowtable1!=0){
                while($opt=mysqli_fetch_assoc($data1)){
                    echo "<option value='".$opt['subjectname']."'>".$opt['subjectname']."</option>";
                }
            }else{
                echo "<option> no subjects added</option>";
            }
            ?>
                            </select>
                        </div>
            <?php 
            $query2 ="select firstname,lastname from teacherdetails";
            $data2 =mysqli_query($connection,$query2);
            $rowtable2 = mysqli_num_rows($data2);
           // echo $rowtable2."<br>";
            ?>
                        <div class="input_text">
                        <label>allocate teacher</label>
                            <select name="teacher" required>
                            <option>-select-</option>
            <?php 
            if($rowtable2!=0){
                while($opt2=mysqli_fetch_assoc($data2)){
                    echo "<option value='".$opt2['firstname']." ".$opt2['lastname']."'>".$opt2['firstname']." ".$opt2['lastname']."</option>";
                }
            }else{
                echo "<option> no subjects added</option>";
            }
            ?>
                            </select>
                        </div>
                   </div>
                    <div class="panel-footer">
                    <input type="submit" class="btn btn-primary" value="make a class" name="submitclass">
                    </div>
                    </form>
                    <?php 
                    if($_POST['submitclass']){
                     $class =$_POST['class'];
                     $subject =$_POST['subject'];
                     $teacher=$_POST['teacher'];
                    $query3 ="insert into listofclass (classname,subject,teacher) values('$class','$subject','$teacher')";
                        $data3 =mysqli_query($connection,$query3);
                        if($data3){
                            echo "done";
                        }else{
                            echo"not done";
                        }
                    }
                    ?>
                 </div>
                </div>
             </div>
            </div>
        </section>
        
        <div class="container box2">
            <div class="row">
            <div class="col-xl-4">
                <div class="panel panel-primary panelcolor">
                <div class="panel-heading">
                    <h4>list of class</h4>
                    </div>
                    <div class="panel-body">
                        <table border="solid" width="100%">
                        <tr>
                            <th><center>s.no</center></th>
                            <th><center>class name</center></th>
                            <th><center> subject name</center></th>
                            <th><center> teacher allocated</center></th>
                            <th><center>operations</center></th>
                            </tr>
                            <?php
                            $query4 ="select * from listofclass";
                            $data4 =mysqli_query($connection,$query4);
                            $rowtable4= mysqli_num_rows($data4);
                            //echo $rowtable4."<br>";
                            if($rowtable4!=0){
                            while($res=mysqli_fetch_assoc($data4)){
                                echo "<tr>
                            <td><center>".$res['sno']."</center></td>
                            <td><center>".$res['classname']."</center></td>
                            <td><center> ".$res['subject']."</center></td>
                            <td><center> ".$res['teacher']."</center></td>
                            <td width=20%><center><a href='#'><input type='submit' value='update' class='update'></a><a href='#'><input type='submit' value='delete' class='update delete'></a></center></td>
                            </tr>";
                            }    
                            }
                            ?>
                        </table>
                    
                    </div>
                </div>
                </div>
            </div>
            </div>
        
    </body>
</html>


<!----- <h1>Study Group</h1>
        <hr>
    Study Group Name:<br>
        <input type="text" placeholder="study group">
        <br>
        
        
        Choose subject:
        <br>
        <select id="select">
        <option>-</option>
        </select>
        <br>
        
        
        Choose Teacher:
        <br><select><option placeholder="choose teacher">-</option></select><br>
        <input type=submit value="assign"><hr>
        <div class="container">
            <div class="row row_style"><div class="col-xs-10"><div class="panel panel-info"><div class="panel-heading">Study Group</div>
                <div class="panel-body">
                <table><tbody><tr><th>ID#</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Teacher</th>
                    <th>Action</th></tr></tbody></table></div></div></div></div></div>----->
