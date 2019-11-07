<?php

$sql = "SELECT * FROM  `users` WHERE name='$uname'";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $user_name= $row["name"];
     $user_password= $row["password"];
  }
} else {
  echo "User not Found!";
}
$conn->close();

?>