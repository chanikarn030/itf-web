<?php

$conn = mysqli_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if (!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}

$sql = "DELETE FROM guestbook002 WHERE ID='".$_GET["ID"]."'";
$query = mysqli_query($itflab, $sql);

echo "<a href=\"show.php\">BACK</a>";
?>
