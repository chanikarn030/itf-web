<html>
<head>
<title>ITF Lab</title>
</head>
<style>
    th, td {padding: 6px; border-inline-end: 0cm; border-bottom: 0cm; border-top: 0cm; border-inline-start: 0cm;}
    .center1{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 585px;
    height: 100px}
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
<table class="center" width="600" border="1">
  <tr>
    <th width="150" style="color: #f0ffff; background-color: lightcoral;"><div align="center">Name</div></th>
    <th width="300" style="color: #f0ffff; background-color: salmon;"><div align="center">Comment </div></th>
    <th width="150" style="color: #f0ffff; background-color: lightcoral;"><div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td width="300" style="background-color: #f8c6ce"><?php echo $Result['Name'];?></div></td>
    <td width="150" style="background-color: #fabcb6"><?php echo $Result['Comment'];?></td>
    <td width="300" style="background-color: #f8c6ce"><div align="center">
        <input type="button" value="Delete" style="padding: 3.5%; background-color: tomato; border-width: 0cm; color:white" onclick="document.location='deletet.php'">
        <input type="button" value="Edit" style="padding: 3.5%; background-color: tomato; border-width: 0cm; color:white">
  </tr>
<?php
}
?>
</table>
<form action = "delete.php" method = "post" id="Delete">
<div class="center1"><button type="button" href='deletet.php?id=$row[ID]' style="padding: 12px; border-width: 0cm; background-color: lightsalmon; color: white; border-radius: 12px;" ><strong>ADD</strong></button></div>
<?php
mysqli_close($conn);
?>
</body>
</html>

