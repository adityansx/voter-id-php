<?php
require('db.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $dob = $_POST['dob'];
    $pin = $_POST['pincode'];
    $vid = $_POST['voterid'];
    $permAddr = $_POST['permanentAddr'];
    $presAdrr = $_POST['presentAddr'];
    $gender = $_POST['gender'];
    $phNo = $_POST['phonenum'];

    $presAdrr = trim(preg_replace('/\s+/', ' ', $presAdrr));
    $permAddr = trim(preg_replace('/\s+/', ' ', $permAddr));

    $sql = 'INSERT INTO voterlist
    (name, dob, gender, pincode, voterid, presentAddress, permanentAddress, phoneNumber) 
    VALUES(?, ?, ?, ?, ?, ?, ?, ?)';

    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$name, $dob, $gender, $pin, $vid, $presAdrr, $permAddr, $phNo]))
        echo 'Registered Successfully'; 
    else echo 'Unable to register at the moment';
}
?>