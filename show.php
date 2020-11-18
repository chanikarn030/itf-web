<html>
<head>
<title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
<table class="center" width="750" border="1">
  <tr>
    <th width="150" style="color: #f0ffff; background-color: salmon;"><div align="center">Name</div></th>
    <th width="300" style="color: #f0ffff; background-color: lightcoral;"><div align="center">Comment</div></th>
    <th width="150" style="color: #f0ffff; background-color: salmon;"><div align="center">Link</div></th>
    <th width="150" style="color: #f0ffff; background-color: lightcoral;"><div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td width="300" style="background-color: #fabcb6"><?php echo $Result['Name'];?></div></td>
    <td width="150" style="background-color: #f8c6ce"><?php echo $Result['Comment'];?></td>
    <td width="150" style="background-color: #fabcb6"><?php echo $Result['Link'];?></td>
    <td width="300" style="background-color: #f8c6ce"><div align="center">
        <button type="submit" class="btn btn-light"><a href="deletet.php?id=<?=$_GET['id'];?>">Delete</a></button>
        <!--<button type="submit" style="padding: 3.5%; background-color: tomato; border-width: 0cm; color:white"><a href="deletet.php?$id=$_GET['id']">">Delete</a></button></td>-->
  </tr>
<?php
}
?>
</table>
<!-- <form action = "delete.php" method = "post" id="Delete"> -->
<div class="center1"><button type="button" style="padding: 12px; border-width: 0cm; background-color: lightsalmon; color: white; border-radius: 12px;" onclick="document.location='form.html'"><strong>ADD</strong></button></div>
<?php
mysqli_close($conn);
?>
</body>
</html>

