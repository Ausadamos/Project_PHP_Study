

<?php

/*
 * connection database
 */
   $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


$homework_id = $_POST['subject'];
$student_id = $_POST['std_id'];





 $sql ="SELECT homework.id_homework,homework.name,homework.date_order,homework.assign_send,homework.id_teacher_subject,subject.nameSubject "
 ."FROM homework,subject,teacher_subject,student_subject_teacher WHERE homework.id_teacher_subject=teacher_subject.id_teacher_subject "
 ."AND teacher_subject.id_subject=subject.id_subject AND student_subject_teacher.id_subject_teacher=teacher_subject.id_teacher_subject "
 ."AND student_subject_teacher.id_student='$student_id' AND homework.id_homework='$homework_id'";
 $result = mysqli_query($con, $sql);

$Rows = mysqli_num_rows($result);

if ($Rows  > 0) {
   while ( $row = mysqli_fetch_row($result)) {

         echo "
         <form action='send_homeworktodb.php' method='post' enctype='multipart/form-data'>
         <input type='hidden' name='id_homework' value='".$row[0]."'>
         <label>วิชา</label>
         <input type='text' name='name_subject' value='".$row[5]."'>
         <label>หัวข้อ</label>
         <input type='text' name='id_student' value='".$row[1]."'>
         <label>Comment</label>
         <textarea name='txtName'></textarea><br><br>
         <input type='file' name='filUpload'><br><br>
         <button class='waves-effect btn' type='submit'>ยืนยัน</button>
         </form>
         ";

    }

}else{
 echo "ไม่เข้า ไอ่สัส";
 echo "show $student_id:$homework_id";
}
