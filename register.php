<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
include("navbar.php")
?>
<form name="frm" align="center" method="post" action="checkregis.php" enctype="multipart/from-data">
<input class="form-input" type="text" name="name" placeholder="ชื่อ-นามสกุล">
<input class="form-input" type="text" name="username" placeholder="เบอร์โทรศัพท์">
<input class="form-input" type="text" name="password" placeholder="รหัสผ่าน">
<input class="form-input" type="text" name="password2" placeholder="ยืนยันรหัสผ่าน">
<br><input class="form-button" type="submit" name="Submit" value="สมัครสมาชิก" /></input>
</form>
</div>
</body>
<?php
 include("footer.php")
?>
</html>