<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Student Profile</title>
        <script src="https://kit.fontawesome.com/b6b9586b26.js"
      crossorigin="anonymous"></script>
      <script type="text/javascript">// Create function qr

          function qr() {
          var t = document.getElementById("text").value;
          document.getElementById("image").innerHTML = `<img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=${t}"></img>`;
           }
     </script>
    </head>
    <body>
        <?php 
        include("connection.php");
        session_start();
        $stdname=$_SESSION['name'];
        $stdcourse=$_SESSION['course'];
        $stdrollno=$_SESSION['rollno'];
        $stdgender=$_SESSION['gender'];
        $stdphoneno=$_SESSION['phoneno'];
        //echo "welcome <br>".$stdname."<br>".$stdcourse."<br>".$stdrollno."<br>".$stdgender."<br>".$stdphoneno;
        ?>
        <center>
            <table>
                <tr>
                    <td>
                    <label>Student Name:</label>
                    </td>
                    <td><?php echo $stdname;?></td>
                </tr>
                <tr>
                    <td>
                        <label>Student ID:</label>
                    </td>
                    <td><?php echo $stdrollno;?></td>
                </tr>
        <tr>
            <td>
                <label>Student Branch:</label>
            </td>
            <td>CSE</td>
                
        </tr>
                <tr>
                    <td>
                    <label>Student gender:</label>
                    </td>
                <td><?php echo $stdgender;?></td></tr>
        <tr><td><label>Student course:</label></td>
                <td><?php echo $stdcourse;?></td></tr>
       <tr><td><label>Student phoneno:</label></td>
                <td><?php echo $stdphoneno;?></td></tr>
        
            </table>
        <br><h4>your QR code</h4>
        <br><img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=<?php echo $stdrollno." ".$stdname;?>" alt=""/>
        </center>
    </body>
</html>