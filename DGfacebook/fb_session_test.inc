<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: fb_login_db.php");
}
?>