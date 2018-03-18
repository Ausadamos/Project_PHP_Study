

<?php

 $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


$subjects_id = isset($_POST['subjects']) ? $_POST['subjects'] : "";






 $sql ="SELECT * FROM `teacher_subject` WHERE id_subject = $subjects_id";
 $result = mysqli_query($con, $sql);

$Rows = mysqli_num_rows($result);

if ($Rows  > 0) {
    echo "<option value='' disabled selected>Choose your Section</option>";
   while ( $row = mysqli_fetch_row($result)) {
       

       // echo "<option value=$row[0]>".$row[1]."</option>";
        
         echo " <option value=\"" . $row[0] . "\">" . $row[3] . "</option>";
        
    }
      
}else{
   echo "<option value=\"\">ไม่มีเซคในวิชาเรียนที่เลือก</option>";
}