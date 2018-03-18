<?php

          $timein = $_POST["timein"];
          $timeout= $_POST["timeout"];
          $subject= $_POST["subject"];
          $date   = $_POST["date"];
          $status= $_POST["status"];
          
         // echo $date.$status.$subject.$timein.$timeout;
          
           $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

if(  $status != 5 && $status != 3 ){
 $sql = "UPDATE `student_subject` SET "
         . "`status_study`=$status  WHERE date='$date' AND "
         . "timeIn = '$timein' AND timeOut ='$timeout' AND id_teacher_subject = $subject ";
  $result = mysqli_query($con,$sql);
 
  //echo $sql;
  if($result){
      echo "อัพเดตสำเร็จ";
  }else{
        echo "อัพเดตไม่สำเร็จ";
  }
}else{
    $sql2 = "DELETE FROM `student_subject` WHERE date='$date' AND id_teacher_subject=$subject AND timeIn='$timein' AND timeOut='$timeout' ";
  $result2 = mysqli_query($con,$sql2);
 
 // echo $sql;
  if($result2){
      echo "ลบสำเร็จ";
  }else{
        //echo $sql2;
        echo "ลบไม่สำเร็จ";
  }
} 