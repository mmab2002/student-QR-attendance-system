<!--<!DOCTYPE html>
<html>
<head>
<title>qr code</title>    
</head>
<body>
<form action="#" method="post">
<input type="text" name="name" placeholder="enter name"><br><br>
<input type="text" name="qr" placeholder="qr code text"><br><br>
<input type="submit" name="sb" value="generate qr code"><br>
</form>
    <img src="https://charts.apis.google.com/charts?cht=qr&chs=250x250&chl=https://google.com">
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QR code</title>
    <!-- StyleSheet -->
    <!--<link rel="stylesheet" href="style.css" />
     Font Awesome -->
    <script
      src="https://kit.fontawesome.com/b6b9586b26.js"
      crossorigin="anonymous"
    ></script>
      <script type="text/javascript">// Create function qr

function qr() {
  var t = document.getElementById("text").value;
  document.getElementById(
    "image"
  ).innerHTML = `<img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=${t}"></img>`;
}
</script>
      <!--<style>
    @import url("https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Baloo Tamma 2", cursive;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #fef3ef;
}
#container {
  display: flex;
  justify-content: center;
  align-items: center;
  background: white;
  border-radius: 7px;
  overflow: hidden;
  box-shadow: 28px 20px 58px rgba(0, 0, 0, 0.2);
}

/* left part*/

#left {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
  width: 25rem;
  height: 25rem;
}
#in {
  display: flex;
  flex-direction: column;
}

p {
  color: black;
  text-align: center;
  letter-spacing: 1px;
  font-size: 25px;
  padding: 60px 0;
  font-weight: 800;
  text-transform: uppercase;
  text-decoration: #feb101 3px solid underline;
  text-underline-position: under;
}

/* Input Type */

#text {
  margin-bottom: 30px;
  font-size: large;
  padding: 5px 25px 0 10px;
  font-weight: 600;
  letter-spacing: 1px;
}
input {
  outline: 2px solid #feb101;
  border: 0 outset;
  height: 2.3rem;
  border-radius: 5px;
}
input::placeholder {
  font-weight: 500;
  font-size: large;
}
/* Button */

i {
  margin-right: 8px;
  font-weight: 700;
}
button {
  padding: 5px 0;
  border: none;
  color: black;
  border-radius: 5px;
  background: #feb101;
  font-size: 18px;
  font-weight: 800;
  cursor: pointer;
}
button:hover {
  background: black;
  color: #feb101;
}
button:active {
  transform: translateY(4px);
}

/* Right part */

#right {
  background: #feb101;
  width: 25rem;
  height: 25rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

#image {
  width: 310px;
  height: 310px;
  background: black;
  border-radius: 7px;
}
img {
  border: black 5px solid;
  border-radius: 7px;
}

      </style>-->
  </head>
  <body>
    <div id="container">
      <div id="left">
        <div id="in">
          <p>qr code generator</p>
          <input type="text" name="" id="text" placeholder="Enter Data" required/>
          <button onclick="qr()">
            <i class="fa fa-qrcode" aria-hidden="true"></i>
            Generator QR Code
          </button>
        </div>
      </div>
      <div id="right">
        <div id="image">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=neogorithm" alt=""/>
        </div>
      </div>
    </div>

    <!-- Script JS -->
    <script src="script.js"></script>
  </body>
</html>

<?php 
/*include("phpqrcode/qrlib.php");
if(isset($_POST['sb'])){
   
    $path='img/';
    $file=$path.$_POST['name'].'.png';
    $text=$_POST['qr'];
    Qrcode::png($text,$file);
}*/
?>