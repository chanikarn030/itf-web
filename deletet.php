<meta charset="UTF-8">
<?php
include('connection.php');
$ID = $_REQUEST["ID"];

$sql = "DELETE FROM tb_member WHERE ID='$ID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

echo "<a href=\"show.php\">BACK</a>";
?>
