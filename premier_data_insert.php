
<?php
include('action/sql_config.php');
if(isset($_POST["premier_date"], $_POST["joma"])){
$premier_date = mysqli_real_escape_string($conn, $_POST["premier_date"]);
$joma = mysqli_real_escape_string($conn, $_POST["joma"]);
$id = mysqli_real_escape_string($conn, $_POST["test"]);
$savings = mysqli_real_escape_string($conn, $_POST["savings"]);
}
$sql = "INSERT INTO member_premier_data (premier_date, joma, test, savings)
VALUES('$premier_date', '$joma', '$id', '$savings')";
if ($conn->query($sql) === TRUE) {
echo "data inserted"; 
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location: single_view.php?id='.$id);
?>