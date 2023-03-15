<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'polaroid';

$link = mysqli_connect($host, $username, $password);
$mysqli = new mysqli($host, $username, $password,$db);
if(!$link){
    echo "Cannot connect to phpmyadmin";
}
else{
    mysqli_select_db($link ,$db);
}

?>