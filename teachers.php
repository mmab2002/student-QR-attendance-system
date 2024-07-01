<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <style>
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
        table{
            
            top: 50%;
            
        }
        nav{
                background-color: #0c3980;
                padding: 0px 0px 0px 0px;
                margin: 0px 0px 0px 0px;
            }
        h1{
            color: #fff;
        }
        header{
            background-color: #0c3980;
            margin-top: 0px;
            margin-left: 0px;
            margin-right: 0px;
        }
         body{
                background-color: #f0f0f0;
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
      
    </style>
</head>
<body>
    <header>
    <nav><center><h1>Teachers</h1></center></nav>
    <nav> <center><ul><li><a href="csehome.html">home</a></li><li><a href="addteacher.php">add teacher</a></li><li><a href="AdminDashboard.html">admin dashbord</a></li></ul></center></nav></header>
<?php 
include("connection.php");
$query  = "SELECT * FROM teacherdetails";
$data  = mysqli_query($connection,$query);
$total  = mysqli_num_rows($data);
//echo $total."<br>";
?>
<center>
<table border="solid" width=100%>
    <tr>
    <th width=4%>teacher id</th>
    <th width=10%>First name</th>
    <th width=10%>Last name</th>
    <th width=10%>Phone.no</th>
    <th width=5%>Gender</th>
    <th width=8%>DOB</th>
    <th width=15%>Email</th>
    <th width=9%>Password</th>
    <th width=10%>Operation</th>
    </tr>
<?php
if($total!=0){
while($result=mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['firstname']."</td>
                <td>".$result['lastname']."</td>
                <td>".$result['phoneno']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['DOB']."</td>
                <td>".$result['email']."</td>
                <td>".$result['password']."</td>
                <td><a href='update_teh_desgin.php?id=$result[id]'><input type='submit' value='update' class='update'> </a>
                <a href='delete_teh_data.php?id=$result[id]' ><input type='submit' value='delete' class=' update delete'></a></td>
                </tr>
                      ";

}
}
else{
    echo "no data to print";
}

?></table>
</center>
    </body>
</html>


 <!---<section class="students">
            <div class="container">
            <div class="col-xl-4">
        <div class="panel panel-primary">
            <div class="panel-heading">student list</div>
            <div class="panel-body">
           // <?php 
            //include("students.php");
            //?>
            </div>
                </div>
                </div>
            </div></section>---->