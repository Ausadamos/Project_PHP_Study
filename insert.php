<?php




//--------------------คอนเน็กฐาน----------------------------------
  $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");



$sql12 = "SELECT id_student_subject FROM `student_subject`";
     $result12 = mysqli_query($con, $sql12);
     
     
$sql13 = "INSERT INTO `tool_student_subject`(`id_student_subject`, `nametool`, `status`) VALUES ([value-1],[value-2],[value-3])";
     $result13 = mysqli_query($con, $sql13);
     
     
     while ($row = mysqli_fetch_row(  $result12)) {
         
         $sql13 = "INSERT INTO `tool_student_subject`(`id_student_subject`, `nametool`, `status`) VALUES ($row[0],'-',1)";
     $result13 = mysqli_query($con, $sql13);
     
         if(  $result13){
             echo 'success';
         }
         
    
}
     
     
     
 
     
     
     
