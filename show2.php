<html>
<head>
<title>ITF Lab</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<html>
<head>
<title>ITF Lab</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<html>
<head>
<title>ITF Lab</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
</head>
<style>
    body{
        background-color: rgb(224, 176, 195);
    }
    th, td {
        padding: 13px; border-bottom-width: 5cm;
    }
</style>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook003');
?>
<table class="center1" width="1100" style="margin-left:auto;margin-right:auto;margin-top: 20px;">
  <tr>
    <th width="150" style="color: #f0ffff; background-color: salmon;"><div align="center">ชื่อสินค้า</div></th>
    <th width="300" style="color: #f0ffff; background-color: lightcoral;"><div align="center">ราคาต่อหน่วย</div></th>
    <th width="250" style="color: #f0ffff; background-color: salmon;"><div align="center">จำนวน</div></th>
    <th width="200" style="color: #f0ffff; background-color: lightcoral;"><div align="center">ราคาทั้งหมด</div></th>
    <th width="200" style="color: #f0ffff; background-color: salmon;"><div align="center">การจัดการ</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td style="background-color: #fabcb6"><?php echo $Result['Product'];?></div></td>
    <td style="background-color: #f8c6ce"><?php echo $Result['Price'];?></td>
    <td style="background-color: #fabcb6"><?php echo $Result['Amount'];?></td>
    <td style="background-color: #f8c6ce"><?php echo $Result['Total'];?></td>
    <td style="background-color: #fabcb6"><div align="center">
        <button type="submit" style="padding: 5%; background-color: tomato; border-width: 0cm; color:white; border-radius: 6px;"><a href="deletet.php?id=<?=$Result['id'];?>" style="color: white; text-decoration: none;"><strong>Delete</strong></a></button>
  </tr>
<?php
}
?>
</table>
<div align="center"><button type="button" style="cursor: pointer; margin-top: 23px; padding: 12px; border-width: 0cm; background-color: lightsalmon; color: white; border-radius: 12px;" onclick="document.location='form2.html'"><strong>ADD</strong></button></div>
<?php
mysqli_close($conn);
?>
</body>
</html>
