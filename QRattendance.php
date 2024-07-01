<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <link rel=stylesheet href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>QR Attendance</title>
    <style>
        body{
            background-color: #c4c4c4;
        }
        video{
            width: 750px;
            height: auto;
        }
        .form-control{
            margin-left: 50%;
        }
        .panel_position
        {   position: absolute;
            left: 40%;
            width: 700px;
        }
    </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="row">
       <center> <div class="video">
        <video id="preview" width="100%"></video>
           </div></center>
        <div class="col-xs-6">
            <form action="#" method="post" class="form-horizontal">
        <input type="text" name="text" id="text" class="form-control" placeholder="your data" readonly="" hidden>
        </form>
        </div>
        </div>
    </div>
    <script>
    let scanner=new Instascan.Scanner({video: document.getElementById('preview')});
        Instascan.Camera.getCameras().then(function(cameras){
                if(cameras.length > 0){
            scanner.start(cameras[0]);
        }else{
            alert('no camera found');
        }
        }).catch(function(e){
            console.error(e);
        });
        scanner.addListener('scan',function(c)
                                {
            document.getElementById('text').value=c;
            document.forms[0].submit();
        });
                                           
    </script>
    <?php
    include("connection.php");
    error_reporting(0);
    if($_POST['text']){
        $voice = new com("SAPI.SpVoice");
        $text = $_POST['text'];
        $rollno=substr($text,0,12);
        //echo $rollno;
        $inlen= strlen($text);
        //echo $inlen;
        $name=substr($text,13,$inlen);
        //echo $name;
        $message = "Hi".$text."your attendance is successfully added.Thank you";
        $msg="you are unregistered";
        
        $query1="SELECT * FROM studentsdetails where rollno='$rollno'";
        $data1=mysqli_query($connection,$query1);
        $rows1=mysqli_num_rows($data1);
        
        if($rows1==1){
            
            
        $query = "INSERT INTO qrattendance (studentid) VALUES ('$text')";
        $data = mysqli_query($connection,$query);
        if($data){
            $voice->speak($message);
            echo "<script>swal('attendance marked','".$name."your attendance is marked successfully','success');</script>";
            echo "data inserted";
        }else{
            
            echo "something went wrong";
        }
        }
        else{
            $voice->speak($msg);
            echo "<script>swal('unregisted','please login with a registered QR','error');</script>";
        }
        
    }
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <center><div class="panel panel-primary panel_position">
            <div class="panel-heading">
            <label>attendance</label>
            </div>
            <div class="panel-body">
            <table border="solid" width="100%">
                <tr>
                <th>s.no</th>
                    <th>rollno</th>
                    <th>time in</th>
                </tr>
                <?php
                error_reporting(0);
                $sql="select * from qrattendance";
                $value=mysqli_query($connection,$sql);
                $rows=mysqli_num_rows($value);
                if($rows!=0)
                {
                    while($res=mysqli_fetch_assoc($value)){
                        echo "<tr>
                            <td>".$res['id']."</td>
                            <td>".$res['studentid']."</td>
                            <td>".$res['timein']."</td>
                            </tr>";
                    }
                }
                ?>
                </table>
            </div>
            </div>
            </center>
        </div>
        </div>
    </div>
</body>
</html>