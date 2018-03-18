<?php
require('connect.php');
$sick = $_POST["sick"];
$sub = $_POST["sub"];
if($_FILES["image"]["name"] != "")
	{
    $fp = fopen($_FILES["image"]["tmp_name"],"r");
		$ReadBinary = fread($fp,filesize($_FILES["image"]["tmp_name"]));
		fclose($fp);
		$img = addslashes($ReadBinary);
    $insql = 'INSERT INTO sick(story_name,id_student_subject,date_send,image)
    VALUES("'.$sick.'","'.$sub.'",NOW(),"'.$img.'")';
    if ($conn->query($insql) == TRUE) {
      header('location: index.php');
    } else {
      header('location: index.php');
    }
  }
?>
