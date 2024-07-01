<!DOCTYPE html>
<html lang="en">
<head><title>subjects</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, intial-scale=1">
    <style>
        .logo{
            margin-left: 300px;
            margin-top: 5px;
            margin-bottom: 15px;
            height: 110px;
            width: 125px;
            border-radius: 50%;
        }
        nav{
            background-color: #0c3980;
        }
        body{
            background-color: #f0f0f0;
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
            }
         .btn{
                width: 100%;
                background-color:  #2757a2;    
            }
        select{
            width: 15.7%;
            height: 35px;
        }
        .box2{
            position:absolute;
            top:82%;
            left: 10%;
            
        }
        
    </style>
</head>
<body>
      
    <nav>
        <strong><center><h2>subjects</h2></center></strong><a href="index.html"><img src="resources/css/img/stamp.jpg" alt="logo" class="logo"></a>

    <ul><li><a href="csehome.html">home</a></li>
        <li><a href="AdminDashboard.php">dashboard</a></li>
    <li><a href="CseAdminLogin.html">log out</a></li>
    </ul>
    </nav>
    <hr>
    <section>
    <div class="container">
    <div class="row">
        <div class="col-xs-5">
        <div class="panel panel-primary panelcolor">
            <div class="panel-heading">
            <h4>add subject</h4>
            </div>
            <div class="panel-body">
            <form action="#" method="post">
                <div class="container">
                <div class="input_text">
                <label>subject name:</label>
                    <input type="text" name="subject" placeholder="subject name" id="val" required>
                </div>
                
                
                <div class="input_text">
                <label>semester</label>
                    <select name="semester" required>
                    <option value="sem-1"> sem-1 </option>
                    <option value="sem-2"> sem-2 </option>
                    <option value="sem-3"> sem-3 </option>
                    <option value="sem-4"> sem-4 </option>
                    <option value="sem-5"> sem-5 </option>
                    <option value="sem-6"> sem-6 </option>
                    <option value="sem-7"> sem-7 </option>
                    <option value="sem-8"> sem-8 </option>
                    </select>
                </div>
                
                
                <div class="input_text">
            <label>year:</label>
                <b> <input type="radio" name="r2" value="I"> I&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="r2" value="II">  II&nbsp;&nbsp;&nbsp;  
                    <input type="radio" name="r2" value="III"> III&nbsp;&nbsp;&nbsp; 
                    <input type="radio" name="r2" value="IV"> IV 
                    </b>
                    </div>
                
                <div class="input_text">
                <label>curriculum</label>
                <select name="curriculum">
                    <option value="not select">select</option>
                    <option value="AICTE">AICTE</option>
                    <option value="CBCS">CBCS</option>
                    </select>
                </div>
                <div class="input_text">
                <label>field:</label>
                <select name="field" required>
                    <option value="theory">theory</option>
                    <option value="lab">lab</option>
                </select>
                </div>
                
                </div>
                
                <div class="panel-footer">
                <input type="submit" value="add subject" name="subjectdata" class="btn btn-primary" >
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
    if($_POST['subjectdata']){
        $sub    =   $_POST['subject'];
        $sem    =   $_POST['semester'];
        $year   =   $_POST['r2'];
        $cirl   =   $_POST['curriculum'];
        $field  =   $_POST['field'];
        
        $query="insert into listofsubjects (subjectname,semester,year,curriculum,field) values('$sub','$sem','$year','$cirl','$field')";
        $data = mysqli_query($connection,$query);
        if($data){
            echo "done";
        }else {
            echo "not done";
        }
    }else{
        echo "false submit data";
    }
    ?>
    <div class="container box2">
    <div class="row">
        <div class="col-xl-4">
        <div class="panel panel-primary panelcolor">
            <div class="panel-heading">
            <h4>list of subjects</h4>
            </div>
            <div class="panel-body">
            <table border="solid" width=100%>
               <tr> 
                <th> <center> s.no </center> </th>
                <th> <center> subject </center> </th>
                <th> <center> semester </center> </th>
                <th> <center> year </center> </th>
                <th> <center> curriculum </center></th>
                <th> <center> field </center> </th>
               </tr>
                
                <?php
                $sql="select * from listofsubjects";
                $data2 = mysqli_query($connection,$sql);
                $rows = mysqli_num_rows($data2);
                //echo $rows."<br>";
                if($rows!=0){
                    while($result=mysqli_fetch_assoc($data2)){
                        echo "<tr>
                                <th><center>".$result['sno']."</center></th>
                                <th><center>".$result['subjectname']."</center></th>
                                <th><center>".$result['semester']."</center></th>
                                <th><center>".$result['year']."</center> </th>
                                <th><center>" .$result['curriculum']. "</center></th>
                                <th><center>" .$result['field']."</center> </th>
                                </tr>";
                    }
                }else{
                    echo "no data to print";
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!---<h1>Manage Class</h1>
    <br>
    subject name:
    <br>
    <input type="text" placeholder="subject name"><br><br>
    semester status:<select ><option>enable</option><option>disable</option></select><br><br>
    <input type=submit value="save class" style="background-color: green; color:white;">
    </body>--->
    