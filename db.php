<?php 
$dsn = "mysql:host=localhost;dbname=voter_list";
$username = "temp";
$passsword = "12345678";

// echo 'hello from db.php';
try {
    $conn = new PDO($dsn, $username, $passsword);
} catch(PDOException $ex) {
    echo $ex->getMessage();
}
?>