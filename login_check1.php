<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "study";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_POST!=null){
  session_start();
//      $_SESSION['UserID']=null;
  $username = $_POST['username'];
  $password = $_POST['password'];

  $strSQL = "SELECT * FROM student WHERE username = '$username' AND password = '$password'";
  $objQuery = mysqli_query($conn,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
  if(!$objResult)
  {
    $strSQL = "SELECT * FROM teacher WHERE username = '$username' AND password = '$password'";
    $objQuery = mysqli_query($conn,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    if(!$objResult)
    {
      echo "no";
      header("location:login.php");
    }
    else
    {
    echo "ok";
        $_SESSION["UserID"] = $objResult["id_teacher"];
        header("location:indexTeacher.php");
      session_write_close();

    }
  }
  else
  {
  echo "ok";
      $_SESSION["UserID"] = $objResult["id_student"];
      header("location:index.php");
    session_write_close();

  }
  mysqli_close($conn);

}
