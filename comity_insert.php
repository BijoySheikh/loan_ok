<?php

include 'sql_config.php';



if(isset($_POST["name"], $_POST["savings"])){

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $savings = mysqli_real_escape_string($conn, $_POST["savings"]);
    

}



$sql = "INSERT INTO comity (name, savings)
VALUES('$name', '$savings')";



if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location: comity.php');


$conn->close();
?>