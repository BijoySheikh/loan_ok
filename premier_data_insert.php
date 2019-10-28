
<?php
include "sql_config.php";
if(isset($_POST["first_name"], $_POST["last_name"])){
$m_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
$f_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
$id = mysqli_real_escape_string($conn, $_POST["test"]);
}
$sql = "INSERT INTO member_premier_data (first_name, last_name, test)
VALUES('$m_name', '$f_name', '$id')";
if ($conn->query($sql) === TRUE) {
echo "data inserted"; 
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location: single_view.php?id='.$id);
?>