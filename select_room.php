

<?php
 
/*
 * connection database
 */
   $con = mysqli_connect("localhost", "root", "", "study") or dia("ไม่สามารถเชื่อมต่อได้");
        mysqli_set_charset($con, "utf8");
         mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");


$building_id = isset($_POST['buildings']) ? $_POST['buildings'] : "";






 $sql ="SELECT * FROM room WHERE  id_building=$building_id";
 $result = mysqli_query($con, $sql);

$Rows = mysqli_num_rows($result);

if ($Rows  > 0) {
      echo "<option value='' disabled selected>Choose your Room</option>";
   while ( $row = mysqli_fetch_row($result)) {
       

       // echo "<option value=$row[0]>".$row[1]."</option>";
         
         echo " <option value=\"" . $row[0] . "\">" . $row[1] . "</option>";
         
    }
      
}else{
   echo "<option value=\"\">ไม่มีห้องในอาคารที่เลือก</option>";
}