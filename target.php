<?php 
include("../class/db.php");
$vidNum = $_POST['vid-num']; //name stores the value of field with id 'vid-num'
$name = $_POST['userName'];

$stmt = "INSERT INTO TABLE_NAME VALUES(col1, col2, col3, ...);";
// $stmt = "INSERT INTO TABLE_NAME VALUES(?, ?, ?, ?);"; prepared statement, accepts 4 values (i.e., number of question marks)

$stmt = $conn -> prepare($stmt);
if ($stmt = execute(array($vidNum, $name))) echo 'Successful';
else echo 'Failed!';

?>