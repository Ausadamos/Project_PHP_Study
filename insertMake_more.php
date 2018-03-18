<?php
$subject = $_POST['subject'];

$date= $_POST["date"];
$timein = $_POST["timein"];
$timeout = $_POST["timeout"];
$idteacher = $_POST["idteacher"];
$room = $_POST["room3"];
$group1 = $_POST["group1"];
$tool = $_POST["tool"];

//echo $tool."group1 ===".$group1;

//echo $subject_implode = implode(',', $subject)."<br>";

$count= count($subject)."<br>";
//echo $date."<br>".$timein."<br>".$timeout."<br>".$idteacher."<br>".$room;

$ck=$timein;$ck2=$timeout;
 $endin = date('H:i', strtotime("+01 minutes", strtotime($ck)))."<br>";  
$endout = date('H:i', strtotime("-01 minutes", strtotime($ck2)))."<br>";  
for ($i= 0; $i < $count; $i++) {
    $subject_two[$i] = $subject[$i];
}


for ($i= 0; $i < $count; $i++) {
    //echo $subject_two[$i]."<br>" ;
}
//--------------------คอนเน็กฐาน----------------------------------
  $con = mysqli_connect("localhost", "root", "", "storesale") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


  
  
//-----------------------นับจำนวนนักเรียน ทั้งหมดที่เลือก------------------
  $i2=0;
for ($i= 0; $i < $count; $i++) {
  //  echo "<br>".$subject_two[$i] ;

$sql12 = "SELECT `id_student` FROM `student_subject_teacher` 
     WHERE student_subject_teacher.id_subject_teacher = $subject_two[$i] GROUP BY id_student";
     $result12 = mysqli_query($con, $sql12);
 
    // echo $sql12;
//echo $sql12."<br>";
  while ($row3 = mysqli_fetch_row($result12)) {
   // echo $row3[0];
    $i2++;
}

}
//echo "จำนวนนักเรียนทั้งหมด = $i2<br>";
//---------------------เช็คจำนวนโต้ะ---------------------------
$sql13 = "SELECT `num_table` FROM `room` WHERE id_room = $room";
  $result13 = mysqli_query($con, $sql13);

      $row13 = mysqli_fetch_row($result13);

     // echo "จำนวนโต๊ะ = $row13[0]<br>";
 //-------------------เช็ก โต้ะ == นักเรียน?-----------------------------     

if($i2 <= $row13[0]){
   // echo 'จำนวนโต้ะเพียงพอ : จองห้องได้<br>';
     //--------------------------เช็คตารางสอนอาจาร เวลาสอนซ้ำ--------------------------------------------------
          $sql11 = "SELECT student_subject.id_teacher_subject FROM `student_subject`,
          teacher,teacher_subject WHERE teacher.id_teacher = teacher_subject.id_teacher AND 
          student_subject.id_teacher_subject= teacher_subject.id_teacher_subject AND date='$date' AND (student_subject.status_study = 1 || student_subject.status_study = 0 || student_subject.status_study = 3 || student_subject.status_study = 5) AND
          ((student_subject.timeIn BETWEEN '$endin' AND '$endout') OR (student_subject.timeOut BETWEEN '$endin' AND '$endout') 
                OR ('$endin' BETWEEN student_subject.timeIn AND student_subject.timeOut) OR ('$endout' BETWEEN
          student_subject.timeIn AND student_subject.timeOut)) AND 
          teacher.id_teacher=$idteacher GROUP BY student_subject.id_teacher_subject";
          $result11 = mysqli_query($con, $sql11);
 
        //  echo $sql11."<br>";
        //  $i=0;
          $row2 = mysqli_fetch_row($result11);
           //echo $row2[0];
     
         //  echo "<จำนวนวิชาที่สอนในเวลานี้>".$i."<br>";  
           //---------------------------------------------------
                if((empty($row2[0]))){
                    
             //   echo 'อาจารย์ ไม่มีการสอนในเวลานี้...<br>';
                 //----ขาด $sql4 นะ------------------
                     //---------------เช็ค นส ที่เรียนอยู่ใน
                     $sql6 = "SELECT COUNT(student_subject.id_student_subject) "
                . "FROM `student_subject` WHERE student_subject.date ='$date' "
                . "AND ((student_subject.timeIn BETWEEN '$endin' AND '$endout') "
                . "OR (student_subject.timeOut BETWEEN '$endin' AND '$endout') "
                . "OR ('$endin' BETWEEN student_subject.timeIn AND student_subject.timeOut) "
                . "OR ('$endout' BETWEEN student_subject.timeIn AND student_subject.timeOut)) AND id_room=$room AND status_finish = 1 AND  (student_subject.status_study = 1 || student_subject.status_study = 0 || student_subject.status_study = 3 || student_subject.status_study = 5)"
                ;
                  //   echo $sql6;
                $result6 = mysqli_query($con, $sql6);
                $row6 = mysqli_fetch_row($result6);
                       //--------------เช็คห้องที่จะเลือก--------------------
                       if(empty($row6[0])  ){
                         //  echo "ไม่มีนักศึกษาอื่นเรียนห้องที่เลือกไว้<br>";
                           //---------------เช็ค นส ว่าเรียนวิชาอื่นอยู่หรือเปล่า-------------
                               //---------------------------นับ นส ที่เรียน ในคลาสนั้น ว่าคนไหน ติดเรียนวิชาอื่นหรือเปล่า----------------    
                                        $max_array = end($subject);
                                        $array_idstudent = array();
                                        $count3= count($subject);
                                        //echo "count3 = $count3 ";
                                        for ($i= 0; $i < $count3; $i++) {
                                           // echo "รอบที่ $i.count3=. $count3";
                                $sql = "SELECT COUNT(student_subject.id_student_subject) "
                                 . "FROM `student_subject` WHERE student_subject.date ='$date' "
                                . "AND (student_subject.status_study = 1 || student_subject.status_study = 0 || student_subject.status_study = 3 || student_subject.status_study = 5)  AND ((student_subject.timeIn BETWEEN '$endin' AND '$endout') "
                                . "OR (student_subject.timeOut BETWEEN '$endin' AND '$endout') "
                                 . "OR ('$endin' BETWEEN student_subject.timeIn AND student_subject.timeOut) "
                                 . "OR ('$endout' BETWEEN student_subject.timeIn AND student_subject.timeOut)) AND ("
                                 ;
         
        
                                   
                                           //----------------เลือก รหัส สูงสุด ของวิชานั้น-------------------------------------------
                                           $sql5 ="SELECT MAX(id_student) FROM `student_subject_teacher` WHERE id_subject_teacher = $subject[$i]   "
                                            ;
                                          $result5 = mysqli_query($con, $sql5);
                                          $row5 = mysqli_fetch_row($result5);
                                
                                          
                                          
                                          //-------------------------เลือก นศ ที่ นศ เรียนอยู่-------------------------------
                                           $sql8 ="SELECT id_student FROM `student_subject_teacher` WHERE id_subject_teacher = $subject[$i] ORDER BY id_student";
                                           $result8 = mysqli_query($con, $sql8);
                                           
                                           //-------------------วนรับค่า หรือ ตามด้วย รหัส นศ--------------------------
                                           while ($row8 = mysqli_fetch_row($result8)) {

                                           if($row8[0] == $row5[0]) {
                                           //echo "เข้าแล้วววววว or";
                                           $sql .= "  (student_subject.id_student= $row8[0])) ";
                                           }else{
                                           $sql .= "  (student_subject.id_student= $row8[0]) or ";
                                           }
 
                                           }
        
               
                                           //echo $sql ;
                                           $result = mysqli_query($con, $sql);
        
        
                                           $row = mysqli_fetch_row($result);
      
                                            if(empty($row[0])){
                                                
                                                 $sql9 ="SELECT id_student FROM `student_subject_teacher` WHERE id_subject_teacher = $subject[$i] ORDER BY id_student";
                                                 $result9 = mysqli_query($con, $sql9);
                                                 
                                                 while ($row9 = mysqli_fetch_row($result9)) {
                                                //--------------ถึง เวลาจอง-----------------------
                                                    // echo "max_array = $max_array";
                                                      //   echo "subject= $subject[$i]";
                                                 if($subject[$i] == $max_array){
                                                      array_push($array_idstudent,$row9[0]);
                                                       $count5= count($array_idstudent);
                                                     //  echo "count5 = $count5";
                                                       for ($i3= 0; $i3 < $count5; $i3++) { //วน 2 รอบ
                                                           //----------------เอาลงตามวิชา---------------------------
                                                                   for ($i4= 0; $i4 < $count; $i4++) { //วน 2 รอบ
                                                                       
                                                             $sql15 ="SELECT COUNT(id_student) FROM `student_subject_teacher` WHERE id_student =$array_idstudent[$i3]  AND id_subject_teacher = $subject[$i4]";
                                                             $result15 = mysqli_query($con, $sql15);   
                                                              $row14 = mysqli_fetch_row($result15);
                                                              
                                                             // echo  $sql15 ;
                                                            if($row14[0] != 0){
                                                                  $sql3=   " INSERT INTO `student_subject`(`timeIn`, `timeOut`, date, id_teacher_subject,id_student,id_room,status_finish,status_study) VALUES ('$timein','$timeout','$date',$subject_two[$i4],$array_idstudent[$i3],$room,1,$group1) ";   
                                                                $result3 = mysqli_query($con, $sql3);  
                                                                
                                                                //echo $sql3;
                                                                
                                                                 if($result3){
                                                              //     echo "บันทึกข้อมูลสำเร็จ";
                                                                   $sql17=   " INSERT INTO `tool_student_subject`(`id_student_subject`, `nametool`, status) VALUES ((SELECT MAX(id_student_subject) FROM `student_subject`),'$tool',1) ";   
                                                                   $result17 = mysqli_query($con, $sql17);  
                                                                     if($result17){
                                                                    //     echo "บันทึก tool สำเร็จ";
                                                                     }else{
                                                                   //      echo "บันทึก tool ไม่สำเร็จ";
                                                                     }
                                                                     
                                                                   
                                                                   
                                                                   
                                                                 }else{
                                                               //    echo "บันทึกข้อมูลไม่สำเร็จ";
                                                                 }
                                                           }
                                                       
                                                     // echo  $sql3;
                                                              
                                                                  }
                                                       }
                                                       //-------ให้อารร์เป็นค่า ว่างเปล่า-----------
                                                       $array_idstudent = array();
                                                 }else{
                                                     array_push($array_idstudent,$row9[0]);
                                                 }
                                                } 
                                                 
                                           } else {
                                               echo "ไม่สามารถเพิ่มการเมคได้เนื่องจากมีนักศึกษากำลังเรียนในช่วงเวลานี้ ";
                                               //-------ถ้าเข้าลูปนี้ หยุดทำงาน โค้ดที่เหลือทั้งหมด--------------
                                               exit;
                                           }
                           
                                       }
                           
                           
                           
                       }else{
                            echo "มีนักศึกษาอื่นเรียนห้องที่เลือกไว้ TT";
                       }
                }else{
                echo 'ไม่สามารถเมคได้เนื่องจาก อาจารย์มีการสอนซ้ำเวลาไว้แล้ว';
                } 
    
}else{
     echo 'จำนวนโต้ะไม่เพียงพอ : จองห้องไม่ได้';
}