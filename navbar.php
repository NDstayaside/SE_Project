
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans+Thai&display=swap" rel="stylesheet">
<style>
.navbarmenu{
    display: flex;
    justify-content: flex-start;
    gap: 25%;
    list-style: none;
    white-space: nowrap;
}

.navbaruserlist{
    display: flex;
    justify-content: flex-end;
    gap: 25%;
    white-space: nowrap;
}

.navbar{
    width: auto;
    border-bottom: 1px solid #D9D9D9;
    display: flex;
    justify-content: space-between;
    font-family: 'Noto Sans Thai', sans-serif;
    padding: 0.5%;
}
</style>
<div class="navbar">
    <div class="navbarmenu">
        <img src="\image\Logo.png" width="120rem">
        <div>อัลบั้มสอด</div>
        <div>อัลบั้มกาว</div>
        <div>อัดรูป</div> 
    </div>
    <div class="navbaruserlist">
        <div>
            <!-- profile icon -->
        </div>
        <div>
            <?php if(!isset($_SESSION['user_username'])) { ?><a href="login.php">Log in / Sign in </a><?php } ?></div>
        <div><?php if(isset($_SESSION['user_username'])) { ?>Hello! <?php echo $_SESSION['user_username']; } ?></div>
        <div><?php if(isset($_SESSION['user_username'])) { ?><a href="logout.php">ออกจากระบบ</a><?php } ?></div>
    </div>
</div>