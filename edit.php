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

//$sql = "UPDATE guestbook002 SET Name = $name, Comment = $comment, Link = $link WHERE id = $id;";//
$sql = "UPDATE guestbook002 SET Name = '$name', Comment = '$comment', Link = '$link' WHERE id = $id;";


if (mysqli_query($conn, $sql)) {
    header('location: show.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
