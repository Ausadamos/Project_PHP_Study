<?php

          $timein = $_POST["timein"];
          $timeout= $_POST["timeout"];
          $subject= $_POST["subject"];
          $date   = $_POST["date"];
         
 
                   $emoji= $_POST["emoji"];
         // echo $date.$status.$subject.$timein.$timeout;
          
           $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


 $sql = "UPDATE `student_subject` SET "
         . "`id_emoji`= $emoji WHERE date='$date' AND "
         . "timeIn = '$timein' AND timeOut ='$timeout' AND id_teacher_subject = $subject ";
  $result = mysqli_query($con,$sql);
 

  if($result){
      echo "อัพเดตสำเร็จ";
  }else{
        echo "อัพเดตไม่สำเร็จ";
         
  }
