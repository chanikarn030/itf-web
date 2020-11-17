<?php

$conn = mysqli_connect('dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if ($conn === false) {
    die("ERROR: could not connect.".mysqli_connect_error());
} else{
    $ID = $_GET['ID']
}
$sql = "DELETE FROM guestbook002 WHERE ID = {$ID}";
$query = mysqli_query($itflab, $sql);

echo "<a href=\"show.php\">BACK</a>";
?>
