<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM guestbook003 WHERE Id = $id";


if (mysqli_query($conn, $sql)) {
    header('location: show2.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
echo "<a href=\"show2.php\">BACK</a>";
?>
