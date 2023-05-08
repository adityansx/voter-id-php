<?php 
require 'db.php';

$sql = "SELECT * FROM voterlist WHERE voterid = ?";
$stmt = $conn -> prepare($sql);

$stmt->execute();
?>
