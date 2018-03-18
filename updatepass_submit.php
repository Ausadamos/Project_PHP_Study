<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
mysql_connect("localhost","root","");
mysql_select_db("study");
$strSQL = "SELECT * FROM student WHERE id_student = '".$_SESSION['UserID']."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$num1 = $_POST["oldpass"];
echo $num1;
$num2 = $_POST["newpass"];
echo $num2;
$num3 = $_POST["newpass2"];
echo $num3;
$num = $objResult["id_student"];
echo $num;
if ($num2==$num3&&$num1==$objResult["password"]) {
  $sql = "UPDATE student SET password='$num2'WHERE id_student='$num' AND password='$num1'";
}

if ($conn->query($sql) === TRUE) {
    header("location:index.php?alert=1");
} else {
  if ($num2==$num3) {
    header("location:updatepass.php?error=1");
  }
    if ($num2!=$num3) {
    header("location:updatepass.php?error=2");
  }
}

$conn->close();

 ?>
