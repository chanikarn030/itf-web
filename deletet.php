<?php

if ( $_GET["ID"]) {
    $ID = $_GET['ID'];
} else {
    echo "ID not found.";
    die();
}

$sql = "DELETE FROM 'guestbook002' WHERE ID = {$ID}";
$query = mysqli_query($itflab, $sql);

echo "<a href=\"show.php\">BACK</a>";
