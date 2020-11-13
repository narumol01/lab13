<html>
<head>
<title>ITE lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab-itf-13.mysql.database.azure.com', 'it63070094@lab-itf-13', 'ITFLab13', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
    <tr>
        <th width="100"> <div align="center">Name</div></th>
        <th width="150"> <div align="center">Link </div></th>
        <th width="350"> <div align="center">Comment</div></th>
    </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
    <tr>
        <td><?php echo $Result['Name'];?></div></td>
        <td><?php echo $Result['Link'];?></td>
        <td><?php echo $Result['Comment'];?></td>
    </tr>
<?php
}
?>
</table>
<?php
mysquli_close($conn);
?>
</body>
</html>
