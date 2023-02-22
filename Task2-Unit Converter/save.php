<?php
$sever ="localhost";
$username='root';
$password="";
$dbname="myproject";

$con= mysqli_connect($sever, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

//start
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $feet  =$_POST['feet'];
    $meter =$_POST['meter'];
    $inches =$_POST['inches'];
    $cm    =$_POST['cm'];
    $yards =$_POST['yards'];
    $kilometers =$_POST['km'];
    $miles  =$_POST['miles'];
    $kg     =$_POST['kg'];
    $g      =$_POST['g'];
    $hours  =$_POST['hours'];
    $minuts  =$_POST['minuts'];
    $seconds  =$_POST['seconds'];
    $celsius   =$_POST['celsius'];
    $fahrenheit =$_POST['fahrenheit'];
  

$sql= "INSERT INTO `length_converter`(`Feet`, `Meter`, `Inches`, `CM`, `Yards`, `Kilometers`, `Miles`) VALUES ('$feet','$meter','$inches','$cm ','$yards','$kilometers','$miles')";
$result = mysqli_query($con , $sql);
if($result)
{
    echo "<script>alert(`Data Submitted`)</script>";
}
else
{
    echo "<script>alert(`Query Failed`)</script>";
}

$sql1= "INSERT INTO `weight_converter`(`kg`, `g`) VALUES ('$kg ',' $g ')";
$result1 = mysqli_query($con , $sql1);
if($result1)
{
    echo "<script>alert(`Data Submitted`)</script>";
}
else
{
    echo "<script>alert(`Query Failed`)</script>";
}

$sql2= "INSERT INTO `time_converter`(`hours`, `minuts`, `seconds`) VALUES ('$hours',' $minuts','$seconds')";
$result2 = mysqli_query($con , $sql2);
if($result2)
{
    echo "<script>alert(`Data Submitted`)</script>";
}
else
{
    echo "<script>alert(`Query Failed`)</script>";
}

$sql3= "INSERT INTO `temprature_converter`(`celsius`, `fahrenheit`) VALUES ('$celsius','$fahrenheit')";
$result3 = mysqli_query($con , $sql3);
if($result3)
{
    echo "<script>alert(`Data Submitted`)</script>";
}
else
{
    echo "<script>alert(`Query Failed`)</script>";
}
}
?>