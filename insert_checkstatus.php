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
$i = $_POST["i"];
echo $i;

$id_subject = $_POST["subjects2"];
echo $id_subject;
$date = $_POST["date"];
echo $date;
for ($u=1; $u <= $i; $u++) {

  $id_student = $_POST["student_$u"];
  echo $id_student;
  $status = $_POST["status_$u"];
  echo $status;

  $sql = "UPDATE student_subject SET status_checkclass=$status WHERE id_student=$id_student AND id_teacher_subject=$id_subject AND student_subject.date='$date'";
  if ($u<$i) {
    $conn->query($sql);
  }
}
if ($conn->query($sql) === TRUE) {
  header('Location: indexTeacher.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
