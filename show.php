<html>
<head>
<title>ITF Lab</title>

</head>
<style>
    body{
        background-color: rgb(230, 175, 198);
    }
    th, td {
        padding: 7px; border: 0cm;
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
$res = mysqli_query($conn, 'SELECT * FROM guestbook002');
?>
<table class="center1" width="950" style="margin-left:auto;margin-right:auto;margin-top: 20px;">
  <tr>
    <th width="150" style="color: #f0ffff; background-color: salmon;"><div align="center">Name</div></th>
    <th width="300" style="color: #f0ffff; background-color: lightcoral;"><div align="center">Comment</div></th>
    <th width="300" style="color: #f0ffff; background-color: salmon;"><div align="center">Link</div></th>
    <th width="200" style="color: #f0ffff; background-color: lightcoral;"><div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td style="background-color: #fabcb6"><?php echo $Result['Name'];?></div></td>
    <td style="background-color: #f8c6ce"><?php echo $Result['Comment'];?></td>
    <td style="background-color: #fabcb6"><?php echo $Result['Link'];?></td>
    <td style="background-color: #f8c6ce"><div align="center">
        <button type="submit" style="padding: 3.5%; background-color: tomato; border-width: 0cm; color:white; border-radius: 9px;"><a href="deletet.php?id=<?=$Result['id'];?>">Delete</a></button></td>
  </tr>
<?php
}
?>
</table>
<div align="center"><button type="button" style="margin-top: 23px; padding: 12px; border-width: 0cm; background-color: lightsalmon; color: white; border-radius: 12px;" onclick="document.location='form.html'"><strong>ADD</strong></button></div>
<?php
mysqli_close($conn);
?>
</body>
</html>
