<?php





       $student = array();
       $s4_status = array();
           $i88 = $_POST["i88"];
          // echo $i88;
           
          $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");  
           
           
for ($i = 1 ; $i <= $i88; $i++) {
    
    $student[$i] = $_POST["student_$i"];
    $s4_status[$i]  = $_POST["s4_status_$i"];
    
       //  echo         $student[$i]."<br>";
    //echo $s4_status[$i]."<br>";
    
    
    
     $sql =" UPDATE `student_subject` SET`status_checkclass`= $s4_status[$i] WHERE id_student_subject =   $student[$i] ";
 $result = mysqli_query($con, $sql);

 
 
 
      
    
    
    
    
}


