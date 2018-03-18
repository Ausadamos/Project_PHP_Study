<script>
             $(function (){
                     $('#check_homework2').on('submit',function(e) {
                       e.preventDefault();
                       console.log("เข้าแล้ว");
                       var checkid_homework = $("#checkid_homework").val();
                       $.ajax({
                         type: 'POST',
                         data: {checkid_homework:checkid_homework},
                         url: 'check_homework2.php',
                         success: function(data) {
                           //location.reload();
                           $('#homework_card2').html(data);

                         }
                       });
                       return false;
                     });

             });

             </script>


<?php

/*
* connection database
*/
$con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
  mysqli_set_charset($con, "utf8");
   mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


$checkid_homework = $_POST['checkid_homework'];





$sql ="SELECT student.id_student,student.fname,student.lname,homework_student_subject.id_homework_student_subject,"
."homework_student_subject.date_send,homework_student_subject.comment,homework_student_subject.file FROM student"
.",homework,homework_student_subject WHERE student.id_student=homework_student_subject.id_student AND "
."homework_student_subject.id_homework=homework.id_homework AND homework.id_homework=$checkid_homework";
$result = mysqli_query($con, $sql);
$z=1;
$Rows = mysqli_num_rows($result);

if ($Rows  > 0) {
echo "<div class='row'>
      <table>
        <thead>
          <tr>
              <th>ลำดับ</th>
              <th>ชื่อ-นามสกุล</th>
              <th>เวลาส่ง</th>
              <th>Comment</th>
              <th></th>
          </tr>
        </thead>

        <tbody>";
while ( $row = mysqli_fetch_row($result)) {

echo "
          <tr>
            <td>".$z."</td>
            <td>".$row[1]." ".$row[2]."</td>
            <td>".$row[4]."</td>
            <td>".$row[5]."</td>";
            if ($row[6]!=null) {
              echo "<td><a href='downloadfile.php?id=".$row[3]."'>โหลดไฟล์</a></td>";
            }else{
              echo "<td>ไม่มีไฟล์</td>";
            }

echo "   </tr>
   ";
$z++;
}
echo "        </tbody>
      </table>
     </div>";
}else{
echo "ไม่เข้า ไอ่สัส";
}?>
