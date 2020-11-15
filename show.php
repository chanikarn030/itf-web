<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'dataitf.mysql.database.azure.com', 'laize@dataitf', '08032545Pu', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook002');
?>
<table class="center" width="600" border="1">
  <tr>
    <th width="150", style="color: #f0ffff; background-color: #74b164;"> <div align="center">Name</div></th>
    <th width="300", style="color: #f0ffff; background-color: #88d373;"> <div align="center">Comment </div></th>
    <th width="150", style="color: #f0ffff; background-color: #74b164;"> <div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td width="300", style="color: #f0ffff; background-color: #88d373;"><?php echo $Result['Name'];?></div></td>
    <td width="150", style="color: #f0ffff; background-color: #74b164;"><?php echo $Result['Comment'];?></td>
    <td width="300", style="color: #f0ffff; background-color: #88d373;"><?php echo $Result['Link'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
