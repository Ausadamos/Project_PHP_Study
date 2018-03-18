<?php
$tool=  $_POST["tool"];

//--------------------คอนเน็กฐาน----------------------------------
  $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


$sql12 = "DELETE FROM `tool_student_subject` WHERE id_tool_student_subject = $tool ";
     $result12 = mysqli_query($con, $sql12);
     
     
if( $result12 ){
    echo "สำเร็จ";
}