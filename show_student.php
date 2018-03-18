

<?php

/*
 * connection database
 */
   $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


$subject_id = $_POST['subject'];
$date = $_POST["date"];
$id_teacherhw = $_POST["id_teacherhw"];



 $sql =" SELECT student_subject.id_student_subject,student.fname,student.lname,student.code,student_subject.status_checkclass,student_subject.timein "
         . " FROM student,student_subject WHERE student_subject.id_student=student.id_student "
         . " AND student_subject.id_teacher_subject = $subject_id AND student_subject.date='$date' ORDER BY student_subject.timein,student.code ";
 
 $result = mysqli_query($con, $sql);
 $i=1;
 $j=1;
 
$Rows = mysqli_num_rows($result);

if ($Rows  > 0) {
    ?>
  <form id='edit_status_study' method='post' action='update_status_checkclass.php'>
      <?php
      ?>

<?php
   while ( $row = mysqli_fetch_row($result)) {
?>

<?php
         echo "<div class='row'>
           <div class='col s1'>".$i."</div>
          <div class='col s3'>".$row[5]."&nbsp&nbsp". $row[3] ."</div>
    <div class='col s3'>" . $row[1] . " " . $row[2] . "</div>     <div class='col s5'>      ";
         
   if ($row[4] == 2) {

                  echo   "<input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+3) . "' value='1' >
               <label for='test" . ($j+3). "'>เข้าเรียน</label>";
                echo   " <input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+6) . "' value='0' >
               <label for='test" . ($j+6) . "'>ขาดเรียน</label>";
                echo   "    <input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+9) . "' value='2' checked='checked'>
               <label for='test" . ($j+9) . "'>ลา</label>";
         }
    
      elseif($row[4] == 1) {
              
             echo   "<input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+3) . "' value='1'  checked='checked'>
               <label for='test" . ($j+3). "'>เข้าเรียน</label>";
                echo   " <input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+6) . "' value='0' >
               <label for='test" . ($j+6) . "'>ขาดเรียน</label>";  
                 echo   "    <input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+9) . "' value='2' >
               <label for='test" . ($j+9) . "'>ลา</label>";
         } elseif ($row[4] == '0') {
           
                  echo   "<input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+3) . "' value='1'  >
               <label for='test" . ($j+3). "'>เข้าเรียน</label>";
                  
                echo   " <input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+6) . "' value='0' checked='checked'>
               <label for='test" . ($j+6) . "'>ขาดเรียน</label>";
                
              echo   "    <input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+9) . "' value='2'>
               <label for='test" . ($j+9) . "'>ลา</label>";
         } 
             elseif (empty($row[4])) {
               echo   "<input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+3) . "' value='1' >
               <label for='test" . ($j+3). "'>เข้าเรียน</label>";
                echo   " <input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+6) . "' value='0' >
               <label for='test" . ($j+6) . "'>ขาดเรียน</label>";
                echo   "    <input class='with-gap' name='s4_status_$i' type='radio' id='test" . ($j+9) . "' value='2' >
               <label for='test" . ($j+9) . "'>ลา</label>";
         }
            


              
                   
           
                echo    "<input type='hidden' name='student_$i' id='student_$i' value='" . $row[0] ."'></div></div>";
        
  
        $i++;
        $j=$j+9;
    }
    ?>
   
    
    
    <?php
    
    
    
    
    $i = $i-1;
    echo "
   
    <input type='hidden' name='i88' id='i88' value='" . $i ."'>
    ";
?>
    <input type="submit" class="btn waves-effect waves-light red" value="ยืนยัน">
    </form>
    
    <?php
}else{
echo "ไม่มีข้อมูล";
}
