<?php 
include("connection.php"); 
?>
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="http://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, intial-scale=1">
     <title>attendance details</title>
    <style>
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
        .title{
            position: absolute;
            left:45%;
            top:8%;
            font-size: 30px;
            text-transform: uppercase;
        }
        ul{    
            float: right;
            margin-right: 200px;
            text-decoration: none;
            margin-top: 65px;
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
                margin-top: 90px;
        
            }
        
            
         .panelcolor .panel-heading{
             color: black;
                text-align: center;
                text-transform: uppercase;
                background-color: #99c633;
            }
        .panelcolor .panel-body{
            background-color: #ffffff;
        }
        .batch{
            align-content: right;
            padding-left: 85%;
           
        }
        .batchcollection{
            height: 40px;
            width: 150px;
            text-align: center;
        }
         .present 
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
        .absent{
            background-color: red;
        }
    </style>
</head>
    <body>
     <nav>
         <strong class="title">students</strong>
        <a href="index.html"><img src="resources/css/img/stamp.jpg" alt="logo" class="logo"></a>
        <ul><li><a href="csehome.html">home</a></li>
            <li><a href="TeacherDashBoard.html">back</a></li>
            <li><a href="#">profile</a></li>
        </ul>
        
    </nav>
        
    <div class="container">
    <div class="row">
        <div class="col-xl-5">
        <div class="panel panel-success panelcolor">
            <div class="panel-heading">
            <h2>list of students</h2>
            </div>
            <div class="panel-footer">
           <div class="batch">
               <select class="batchcollection">
                <option>--select date--</option>
                <?php 
                    $query = "select * from qrattendance";
                $data=mysqli_query($connection,$query);
                 $total  = mysqli_num_rows($data);
                   $res=mysqli_fetch_assoc($data);?>
                <option><?php echo $res['timein']; ?></option>
               </select>
                </div>
            </div>
            <div  class="panel-body">
            <table border="solid" width="100%">
                <tr>
                <th><center>s.no</center></th>
                <th><center>student ID</center></th>
                <th><center>time in</center></th>
                    <!--<th><center>status</center></th>-->
                <th><center>action</center></th>
                </tr>
                <?php 
                $query = "select * from qrattendance";
                $data=mysqli_query($connection,$query);
                 $total  = mysqli_num_rows($data);
                //echo $total."<br>";               
                if($total!=0){
                    while($res=mysqli_fetch_assoc($data)){
                        echo "<tr>
                              <td><center>".$res['id']."</center></td>
                              <td><center>".$res['studentid']."</center></td>
                              <td><center>".$res['timein']."</center></td>
                              
                              <td><center><input type='submit' value='present' class='present' onclick=present()> 
                <a href='#'><input type='submit' value='absent' class='present absent' onclick=absent()></a></center></td>
                              </tr>";
                    }
                }
                ?>
             </table>
                <script type="text/javascript">
               
                        
                    function present()
                    
                    {
                     <?php
                        echo "
                        alert('present marked');
                     window.location.href='TeacherDashBoard.html';";
                     ?>
                       // var p="present";
                        //document.getElementsByClassName['status'].value=document.write(p);
                        
                    }
                     function absent()
                    
                    {
                     <?php
                        echo "
                        alert('absent marked');
                     window.location.href='TeacherDashBoard.html';";
                     ?>
                       // var p="present";
                        //document.getElementsByClassName['status'].value=document.write(p);
                        
                    }
                    
                </script>
            </div>
            </div>
        </div>
        </div>
    </div>
    </body>
</html>