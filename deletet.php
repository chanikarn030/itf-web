<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM guestbook002 WHERE id = $id";


if (mysqli_query($conn, $sql)) {
    echo "Delete Succesfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
echo "<a href=\"show.php\">BACK</a>";
?>
