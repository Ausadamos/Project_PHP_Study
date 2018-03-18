<?php
require('connect.php');
date_default_timezone_set("Asia/Bangkok");
$date = Date("Y-m-d");
$idsub = $_POST["sub"];
?>
<table id="map" class="table table-striped table-bordered">
<thead >
<tr class="danger" bgcolor="white">
<center>
<th>No.</th>
<th>Section</th>
<th>รหัสนักศึกษา</th>
<th>ชื่อ - สกุล</th>
<th>วัน</th>
<th>คาบ</th>
<th>รายละเอียด</th>
<th>รูปภาพ  </th>
</center>
</tr>
</thead>
<tbody>
<?php $sql = 'SELECT student_subject.date as date,student.code as code,student.fname as fname,student.lname as lname,teacher_subject.section as sec,student_subject.timeIn
as tin,student_subject.timeOut as tout,sick.story_name as story,sick.image as img,subject.nameSubject as nsub,subject.id_subject as subid
FROM student,teacher,subject,teacher_subject,student_subject,sick
WHERE student.id_student = student_subject.id_student and teacher.id_teacher = teacher_subject.id_teacher
and sick.id_student_subject = student_subject.id_student_subject AND subject.id_subject = teacher_subject.id_subject
and teacher_subject.id_teacher_subject = student_subject.id_teacher_subject GROUP BY sick.id_sick';
$i = 0;
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
  if($idsub==$row["subid"]){
    $i++;
?>
<tr bgcolor="white" align="center">
<td><?= $i; ?></td>
<td><?= $row["sec"]; ?></td>
<td style="width:20%;"><?=$row["code"] ?></td>
<td style="width:30%;"><?=$row["fname"] ?> <?=$row["lname"] ?></td>
<td style="width:20%;"><?=$row["date"] ?></td>
<td style="width:20%;"><?=$row["tin"] ?> - <?=$row["tout"] ?></td>
<td style="width:50%;"><?=$row["story"] ?></td>
<td style="width:60%;"><img src="data:image/jpeg;base64,<?=base64_encode( $row['img'] )?>" class="img-circle" width="100%"/></td>
</tr>
<?php
}else{ ?>
  <tr bgcolor="white" align="center">
  
  </tr>
<?php }
} ?>
</tbody>
</table>
