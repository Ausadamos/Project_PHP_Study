
<?php

/*
 * connection database
 */
   $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


$id_teacherhw = $_POST['id_teacherhw'];
$date = $_POST['date'];




 $sql =" SELECT homework.id_homework,homework.name,homework.date_order,homework.assign_send,homework.id_teacher_subject,"
 ." teacher_subject.id_subject,teacher_subject.section,subject.nameSubject FROM homework,teacher_subject,subject WHERE "
 ." homework.id_teacher_subject=teacher_subject.id_teacher_subject AND teacher_subject.id_subject=subject.id_subject"
 ." AND teacher_subject.id_teacher=$id_teacherhw AND date='$date'";
 $result = mysqli_query($con, $sql);

$Rows = mysqli_num_rows($result);

if ($Rows  > 0) {
  echo "<div id='homework_card2'>";
   while ( $row = mysqli_fetch_row($result)) {

     echo "

     <div class='row'>
           <div class='col s12 m12'>
           <h4 class='header'>".$row[1]."</h4>
           <div class='card horizontal'>
           <div class='card-stacked'>
           <div class='card-content'>
           <p> วิชา : ".$row[7]." Section ".$row[6]."<br>
           วันทีสั่ง : ".$row[2]."<br>
           กำหนดส่ง : ".$row[3]."
           </p>
           </div>
           <div class='card-action'>
           <form id='check_homework2' class='' action='' method='post'>
             <input type='text' id='checkid_homework' name='id_teacherhw' value='".$row[0]."'>
             <button class='waves-effect waves-light btn' type='submit'>ตรวจการบ้าน</button>
           </form>
           </div>
           </div>
           </div>
           </div>
           </div>

         ";

    }
    echo "</div>";
}else{
 echo "ไม่เข้า ไอ่สัส";
}?>
