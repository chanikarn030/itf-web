<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$total = $amount*$price;


$sql = "INSERT INTO guestbook003 (Product , Price , Amount, Total) VALUES ('$product', '$price', '$amount', '$total')";


if (mysqli_query($conn, $sql)) {
    header('location: show2.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
