<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adb Tool from Hypesec</title>
</head>
<style>
h1{
color:#FF5733;}
body{
background-color: black;
}
input{
  margin-top: 30px;
  padding: 20px;
  
}
input:hover{
  border: 5px solid #00FF00;
}
h6{
  color:#00FF00;
  margin-left: 100vw;
}
p{
  color:#00FF00;
  padding-top:2px;
  padding:2px;
}
p:hover{
  
  border: 5px solid #FF5733;
}


</style>
<body>
<center>
<img src="hypesec.png">
<h1>ADB Tool</h1>
<form action="" method="POST">
    <input type="submit" value="App Install" name="mybutton">    <br> <br>
    <input type="submit" value="Mobile on/off" name="mybutton"><br> <br>
    <input type="submit" value="File Upload" name="mybutton"><br> <br>
    <input type="submit" value="Battery status" name="mybutton"><br> <br>
    <input type="submit" value="Call" name="mybutton"><br> <br>
    <input type="submit" value="Battery reset" name="mybutton"><br> <br>
    <input type="submit" value="Print text" name="mybutton"><br> <br>
    <input type="submit" value="Battery level changing" name="mybutton"><br> <br>
    <input type="submit" value="Open Browser" name="mybutton"><br> <br>
    <input type="submit" value="Key event" name="mybutton"><br> <br>
    <input type="submit" value="shell Command excute" name="mybutton">       <br> <br>  
     </center>
</form>
<center>
<?php
switch ($_POST["mybutton"]) {
  case "App Install":
    $o=shell_exec("./adb 1");
    echo "<p>".$o."</p>";
    break;
  case "Mobile on/off":
    $ou=shell_exec("./adb 2");
    echo $ou;
    break;
  case "File Upload":
    $out=shell_exec("./adb 3");
    echo "<p>".$out."</p>";
    break;
  case "Battery status":
    $out=shell_exec("./adb 4");
    echo "<p>".$out."</p>";
    break;
  case "Call":
    $out=shell_exec("./adb 5");
    break;
  case "Battery reset":
    $out=shell_exec("./adb 6");
    echo $out;
    break;
  case "Battery level changing":
    $out=shell_exec("./adb 7");
    echo $out;
    break;
  case "Print text":
    $out=shell_exec("./adb 8");
    echo $out;
    break;  
  case "Open Browser":
    $out=shell_exec("./adb 9");
    echo $out;
    break; 
  case "Key event":
    $out=shell_exec("./adb 10");
    echo $out;
    break; 
  case "shell Command excute":
    $out=shell_exec(" ./adb 11");
    echo "<p>".$out."</p>";
    break;                      
  default:
    echo "unknown";
} 
?>
</center>
</body>
</html>
