<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "study";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$hname = $_POST["name"];
echo $hname;
$hdate = $_POST["date"];
echo $hdate;
$hsubject = $_POST["subjects4"];
echo $hsubject;
  $sql = "INSERT INTO `homework` (`id_homework`, `name`, `date_order`, `assign_send`, `id_teacher_subject`) VALUES (NULL, '$hname', CURRENT_TIMESTAMP, '$hdate', '$hsubject');";

if ($conn->query($sql) === TRUE) {
  header('Location: indexTeacher.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

 ?>
