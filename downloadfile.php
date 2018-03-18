<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "study";
$connection =  mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
mysqli_set_charset($connection,'utf-8');
            $id = $_GET['id'];
            echo $id;
            echo "10";
            $sql = "SELECT homework_student_subject.file FROM homework_student_subject WHERE homework_student_subject.id_homework_student_subject=10";

          $result = @mysql_query($sql, $db);
          $type = "jpeg";
          ("Content-type: $type");
          header("Content-length: $size");
          header("Content-Disposition: attachment; filename=$name");
          header("Content-Description: PHP Generated Data");

        ?>
