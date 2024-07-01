<!DOCTYPE html>
<html>
<head>
    <?php include("connection.php"); 
    session_start();
    ?>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="resources/css/styleform.css">
<title>CSE Admin Login</title>
</head>
<body>
<div class="contact-form">
<img src="resources/css/img/razi.jpg" alt="adimpic" class="avatar">
<h2> admin login</h2>
<form method="post" action="#">
<p>Email</p>
<input type="email" name="email" placeholder="Enter Email id">
<p>Password</p>
<input type="password" name="password" placeholder="Enter password">
    <input type="submit" value="signin" name="login">
</form>
     <?php
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pwd=$_POST['password'];
        $query="select * from adminlogin where email='$email' and password='$pwd'";
        $data=mysqli_query($connection,$query);
        $rows=mysqli_num_rows($data);
        //echo $rows; 
       if($rows==1){
           header('location:AdminDashboard.html');
       } else{
           echo "<script >
                alert('enter the right data');
                </script>";
       }
}
?>
</div>
</body>
</html>