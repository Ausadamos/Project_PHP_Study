<?php

$tool=  $_POST["tool"];
$NameTool=  $_POST["NameTool"];



//--------------------คอนเน็กฐาน----------------------------------
  $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


$sql12 = "UPDATE `tool_student_subject` SET `nametool`= '$NameTool' WHERE id_tool_student_subject = $tool ";
     $result12 = mysqli_query($con, $sql12);
     
     
if( $result12 ){
    echo "สำเร็จ";
}