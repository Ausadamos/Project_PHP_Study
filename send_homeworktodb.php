<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
if($_FILES["filUpload"]["name"] != "")
{
//*** Read file BINARY ***'
$fp = fopen($_FILES["filUpload"]["tmp_name"],"r");
$ReadBinary = fread($fp,filesize($_FILES["filUpload"]["tmp_name"]));
fclose($fp);
$FileData = addslashes($ReadBinary);
//*** Insert Record ***//
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("study");
$strSQL = "INSERT INTO homework_student_subject ";
$strSQL .="(id_homework,id_student,comment,file) VALUES (1,2,'".$_POST["txtName"]."','".$FileData."')";
$objQuery = mysql_query($strSQL);
echo "Copy/Upload Complete<br>";
header('Location: index.php');
mysql_close($objConnect);
}
?>
<a href="index.php">กลับ</a>
</body>
</html>
