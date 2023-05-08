<style>
    <?php include("./css/tableStyles.css"); ?>
</style>
<?php 
require("db.php");
$vidNum = $_POST['query'];

$sql = "SELECT * FROM voterlist WHERE voterid = ?";
$stmt = $conn -> prepare($sql);

if ($stmt -> execute([$vidNum])) {
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
    echo 'Record found for Voter ID ' . $_POST['query'];

    echo 
    '<hr>' . 
    '<table>' . 
        '<tr>' . 
            '<th>Voter ID Number</th>' . 
            '<th>Name</th>' . 
            '<th>Date of Birth</th>' . 
            '<th>Gender</th>' . 
            '<th>Phone Number</th>' . 
            '<th>Present Address</th>' . 
            '<th>Permanent Address</th>' . 
            '<th>PIN Code</th>' . 
        '</tr>' . 
    // '<tbody>' . 
        '<tr>' . 
            '<td>' . $row['voterid'] . '</td>' . 
            '<td>' . $row['name'] . '</td>' . 
            '<td>' . $row['dob'] . '</td>' . 
            '<td>' . $row['gender'] . '</td>' . 
            '<td>' . $row['phoneNumber'] . '</td>' . 
            '<td>' . $row['presentAddress'] . '</td>' . 
            '<td>' . $row['permanentAddress'] . '</td>' . 
            '<td>' . $row['pincode'] . '</td>' . 
        '</tr>' . 
    // '</tbody>' . 
    '</table>';
} else 
    echo 'Record does not exist for Voter ID ' . $_POST['query'];
?>