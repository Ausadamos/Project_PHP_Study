<?php
$tool = $_POST["tool"];
$id_student_subject = $_POST["id_student_subject"];

//--------------------คอนเน็กฐาน----------------------------------
  $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

$sql = "INSERT INTO `tool_student_subject`( `id_student_subject`, `nametool`, `status`) "
        . "VALUES ($id_student_subject ,'$tool',2)";
     $result = mysqli_query($con, $sql);
 
     if ($result ) {
         echo "สำเร็จ";
} else {
    echo "ไม่สำเร็จ";
}