<!DOCTYPE html>
<html>
<body>

<?php
include("navbar.php")
?>

<form name="frm"  method="post" action="checklogin.php" enctype="multipart/from-data">
<input style=" width:80%;height:30px;" type="text" name="username" placeholder="username">
<input style="height:30px;width:80%;" type="password" name="password" placeholder="password">
<input type="submit" name="Submit" value="Login" /></input>
</form>
<?php
require_once 'connect.php';
$sql = "SELECT username, password FROM Username";
$result = $mysqli -> query($sql);
$row = $result -> fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);
?>
</body>
<?php
 include("footer.php")
?>
</html>