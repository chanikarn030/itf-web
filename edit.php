<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Name'];
$comment = $_POST['Comment'];
$link = $_POST['Link'];
$id = $_POST['id'];

$sql = "UPDATE guestbook002 SET guestbook002 (Name , Comment , Link) VALUES ('$name', '$comment', '$link')' WHERE id = $id;";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
