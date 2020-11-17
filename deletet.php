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

$sql = "DELETE FROM guestbook002 WHERE ID='".$_GET["ID"]."'";
$query = mysqli_query($itflab, $sql);

echo "<a href=\"show.php\">BACK</a>";
?>
