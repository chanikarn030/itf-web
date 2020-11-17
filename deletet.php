<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_POST['ID'];

$sql = "DELETE FROM guestbook002 WHERE ID='$id'";
$query = mysqli_query($itflab, $sql);

echo "<a href=\"show.php\">BACK</a>";
?>
