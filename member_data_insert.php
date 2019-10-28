<?php  

//Member table data Insert
include('sql_config.php');



if(isset($_POST["first_name"], $_POST["last_name"])){

    $m_name = mysqli_real_escape_string($conn, $_POST["m_name"]);

}

    $sql = "INSERT INTO member_premier_data (first_name, last_name, test)
        VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


header('location: single_view.php');


?>

