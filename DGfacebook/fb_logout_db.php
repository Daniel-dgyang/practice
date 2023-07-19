<?php
session_start();
session_unset();
session_destroy();
header("location: fb_guest_home_db.php");
?>