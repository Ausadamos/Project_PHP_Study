<?php

//---------------------ของใหม่-------------------------------
$timein2 =$_POST["timein2"];
$timeout2 =$_POST["timeout2"];
$subject2 =$_POST["subject2"];
$date2 =$_POST["date2"];
$tool2 = $_POST["tool2"];
$rooms2 = $_POST["room2"];   
//-------------------ของเก่า---------------------------



$timein =$_POST["timein"];
$timeout =$_POST["timeout"];
$subject =$_POST["subject"];
$date =$_POST["date"];

//-------------------------------------------

$ck=$timein2;$ck2=$timeout2;

 $endin = date('H:i', strtotime("+01 minutes", strtotime($ck)))."<br>";  
$endout = date('H:i', strtotime("-01 minutes", strtotime($ck2)))."<br>";  



 $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


 /*$sql = "UPDATE `student_subject` SET "
         . "`status_study`=$status  WHERE date='$date' AND "
         . "timeIn = '$timein' AND timeOut ='$timeout' AND id_teacher_subject = $subject ";
  $result = mysqli_query($con,$sql);
 
  echo $sql;
  if($result){
      echo "สำเร็จ";
  }else{
        echo "ไม่สำเร็จ";
  }
      */

/*----------------------------เอา ไอดีวิชา-------------------------------

 $sql12 = "SELECT id_subject FROM `teacher_subject` WHERE id_teacher_subject = $subject2";
        $result12 = mysqli_query($con, $sql12);
  $row2 = mysqli_fetch_row( $result12)    ;
          
  //echo $sql12;
   //--------------------------เอา id วิชาเป็นเซกๆ------------------------------------
        $sql ="SELECT id_teacher_subject FROM `teacher_subject` WHERE id_subject = $row2[0]";
 $result = mysqli_query($con, $sql);

 
 //-----------------------------เปลี่ยน ข้อมูล เอาไป อัพเดต--------------------------------------------------       
 $sql11 = "SELECT id_student_subject FROM `student_subject` WHERE "
          . "date='$date2'  AND timeOut ='$timeout2'  AND id_teacher_subject = $subject2";
        $result11 = mysqli_query($con, $sql11);
        
        echo $sql11 . "<br>" ;*/


 
  
//-----------------------นับจำนวนนักเรียน ทั้งหมดที่เลือก------------------
  $i2=0;
for ($i= 0; $i < 1; $i++) {
  //  echo "<br>".$subject_two[$i] ;

$sql12 = "SELECT `id_student` FROM `student_subject_teacher` 
     WHERE student_subject_teacher.id_subject_teacher = $subject GROUP BY id_student";
     $result12 = mysqli_query($con, $sql12);
 
    // echo $sql12;
//echo $sql12."<br>";
  while ($row12 = mysqli_fetch_row($result12)) {
  //  echo $row12[0];
    $i2++;
}

}
//echo "จำนวนนักเรียนทั้งหมด = $i2<br>";
//---------------------เช็คจำนวนโต้ะ---------------------------
$sql13 = "SELECT `num_table` FROM `room` WHERE id_room = $rooms2";
  $result13 = mysqli_query($con, $sql13);

      $row13 = mysqli_fetch_row($result13);

     // echo "จำนวนโต๊ะ = $row13[0]<br>";
 //-------------------เช็ก โต้ะ == นักเรียน?-----------------------------     

if($i2 <= $row13[0]){
    
    
 //-----------------ดูข้อมูล เก่าาาที่เคยบันทึก เฉพาะวิชานี้-----------------------------------
        
 $sql19 = "SELECT id_student_subject FROM `student_subject` WHERE "
          . "date='$date2' AND timeIn='$timein' AND timeOut ='$timeout' AND id_teacher_subject = $subject2";
        $result19 = mysqli_query($con, $sql19);
        
      //  echo $sql19 . "<br>" ;
        
 //---------------------------ดู id ในฐาน ที่เลือกมาทั้งหมด--------------
 $sql20 = "SELECT id_student_subject FROM `student_subject` WHERE "
          . "date='$date2' AND (student_subject.status_study = 0 || student_subject.status_study = 1 || student_subject.status_study = 3 || student_subject.status_study = 5) AND
          ((student_subject.timeIn BETWEEN '$endin' AND '$endout') OR (student_subject.timeOut BETWEEN '$endin' AND '$endout') 
                OR ('$endin' BETWEEN student_subject.timeIn AND student_subject.timeOut) OR ('$endout' BETWEEN
          student_subject.timeIn AND student_subject.timeOut)) AND id_room = $rooms2 ";
 
 
        $result20 = mysqli_query($con, $sql20);
        
     //  echo $sql20 . "<br>" ;       
       //-------------------------------
        //---------------------------ดู id ในฐาน ที่เลือกมาทั้งหมด ทำอีกรอบเพื่อ ไปใช้นับ empty--------------
 $sql21 = "SELECT id_student_subject FROM `student_subject` WHERE "
          . "date='$date2' AND (student_subject.status_study = 0 || student_subject.status_study = 1 || student_subject.status_study = 3 || student_subject.status_study = 5) AND
          ((student_subject.timeIn BETWEEN '$endin' AND '$endout') OR (student_subject.timeOut BETWEEN '$endin' AND '$endout') 
                OR ('$endin' BETWEEN student_subject.timeIn AND student_subject.timeOut) OR ('$endout' BETWEEN
          student_subject.timeIn AND student_subject.timeOut)) AND id_room = $rooms2 ";
 
        $result21 = mysqli_query($con, $sql21); 
//-----------------------------ข้อมูลเก่า ที่เรียนวิชาเดียวกัน คนล่ะเซก ต้องจองได้-------------------------
 /*$sql10 = "SELECT * FROM `student_subject`,teacher_subject,subject WHERE teacher_subject.id_teacher_subject = student_subject.id_teacher_subject AND teacher_subject.id_subject = subject.id_subject AND teacher_subject.id_subject=$row2[0] AND "
          . " date='$date'  AND (student_subject.status_study = 1 || student_subject.status_study = 3 || student_subject.status_study = 5) AND
          ((student_subject.timeIn BETWEEN '$endin' AND '$endout') OR (student_subject.timeOut BETWEEN '$endin' AND '$endout') 
                OR ('$endin' BETWEEN student_subject.timeIn AND student_subject.timeOut) OR ('$endout' BETWEEN
          student_subject.timeIn AND student_subject.timeOut)) AND (  ";
 
        

        
         //----------------เลือก รหัส สูงสุด ของวิชานั้น-------------------------------------------
                                           $sql5 ="SELECT MAX(student_subject_teacher.id_student) FROM `student_subject_teacher`,teacher_subject WHERE teacher_subject.id_teacher_subject = student_subject_teacher.id_subject_teacher AND teacher_subject.id_subject = $row2[0] "
                                            ;
                                          $result5 = mysqli_query($con, $sql5);
                                          $row5 = mysqli_fetch_row($result5);
                                
                                          
                                          
                                          //-------------------------เลือก นศ ที่ นศ เรียนอยู่-------------------------------
                                           $sql8 ="SELECT student_subject_teacher.id_student FROM `student_subject_teacher`,teacher_subject WHERE teacher_subject.id_teacher_subject = student_subject_teacher.id_subject_teacher AND teacher_subject.id_subject = $row2[0] ORDER BY student_subject_teacher.id_student ASC";
                                           $result8 = mysqli_query($con, $sql8);
                                           
                                           //-------------------วนรับค่า หรือ ตามด้วย รหัส นศ--------------------------
                                           while ($row8 = mysqli_fetch_row($result8)) {

                                           if($row8[0] == $row5[0]) {
                                           //echo "เข้าแล้วววววว or";
                                           $sql10 .= "  (student_subject.id_student= $row8[0])) ";
                                           }else{
                                           $sql10 .= "  (student_subject.id_student= $row8[0]) or ";
                                           }
 
                                           }
                                           
            $result10 = mysqli_query($con, $sql10);                               
                    echo  "<br>" .$sql10  . "<br>"    ;                
                  */      
                                    

        
        $a = array();
        
          while ($row19 = mysqli_fetch_row($result19)) {
                    
                    // echo "row10=".$row10[0]."<br>";
                       array_push($a, $row19[0]);
                 
                } 
                
              $row20 = mysqli_fetch_row($result20);
              
                 if( empty( $row20)){
                    // echo "หาข้อมูลใหม่ ว่าง จองเลยแบบไม่มีเงื่อนไข";
                     
                     
                     
                 } else {
                      //  echo "หาข้อมูลใหม่ ไม่ว่าง<br>";
                        
                         while ($row21 = mysqli_fetch_row($result21)) {
                    
                   
                      $r = in_array($row21[0],$a);
              
         if($r){
             //echo "อยู่นะ"."<br>";
         }else{
              echo "ไม่สำเร็จ เนื่องจากการจองมีการซ้อนทับ";
              exit();
         }       
                 
                    
                       
                  }   
                  
                  
                     }
               
         
                      
                   
    
 //-------------------แก้ไข-------------------------------
 //echo "insert------------------------------------------";
 
 
 $sql = "UPDATE `student_subject` SET "
         . "date='$date2',timeIn = '$timein2' ,timeOut ='$timeout2',id_room='$rooms2' WHERE date='$date' AND "
         . "timeIn = '$timein' AND timeOut ='$timeout' AND id_teacher_subject = $subject2 ";
  $result = mysqli_query($con,$sql);
 
  //echo $sql;
  if($result){
      echo "สำเร็จ";
  }else{
        echo "ไม่สำเร็จ";
  }
      
//---------------------------ดู id ที่แก้ไขไป----------------------
  $sql22 = "SELECT id_student_subject FROM `student_subject` WHERE "
          . "date='$date2' AND (student_subject.status_study = 1 || student_subject.status_study = 3 || student_subject.status_study = 5) AND
          timeIn = '$timein2'AND timeOut ='$timeout2' AND id_teacher_subject = $subject2  ";
 
        $result22 = mysqli_query($con, $sql22);
        
        while ($row22 = mysqli_fetch_row($result22)) {
    //echo $row22[0];
    
     $sql23 = "UPDATE `tool_student_subject` SET `nametool`= '$tool2' WHERE id_student_subject =  $row22[0] AND status=1  ";
  $result23 = mysqli_query($con,$sql23);
 
    if($result23){
     // echo "สำเร็จ";
  }else{
       // echo "ไม่สำเร็จ";
  }
  
}
    
    
    
    
}else{
    echo "จำนวนโต๊ะไม่พอกับจำนวนนักศึกษา";
}