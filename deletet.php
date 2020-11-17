<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if ( $_GET['ID']) {
    $ID = $_GET["ID"];
} else {
    echo "ID not found.";
    die();
}

$sql = "DELETE FROM 'guestbook002' WHERE ID = {$ID}";
$query = mysqli_query($itflab, $sql);

echo "<a href=\"show.php\">BACK</a>";
?>
