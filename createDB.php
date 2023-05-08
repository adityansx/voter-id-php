<?php 
require("db.php");

$sql = "CREATE TABLE IF NOT EXISTS voterlist(
    name VARCHAR(255),
    dob DATE,
    gender VARCHAR(255),
    pincode int,
    voterid int PRIMARY KEY
)";

$stmt = $conn->prepare($sql);

if($stmt->execute()) {
    echo "created table";
} else {
    echo "error creating table";
}
?>