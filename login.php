<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<!-- <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans+Thai&display=swap" rel="stylesheet"> -->
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
include("navbar.php")
?>
<h1 align="center">กรุณาเข้าสู่ระบบ</h1>
<form name="frm" align="center" method="post" action="checklogin.php" enctype="multipart/from-data">
<input class="form-input" type="text" name="username" placeholder="เบอร์โทรศัพท์">
<input class="form-input" type="password" name="password" placeholder="รหัสผ่าน">
<br><input class="form-button" type="submit" name="Submit" value="เข้าสู่ระบบ" /></input>
</form>
<h5 align="center">
<a href="register.php">ยังไม่มีบัญชี? สมัครเลย</a>
</h5>
</body>
<?php
 include("footer.php")
?>
</html>