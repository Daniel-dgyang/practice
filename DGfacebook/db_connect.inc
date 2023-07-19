<?php
$db = mysql_connect("localhost", "studentuser", "goodstudent") or die("DB서버 연결실패!");
mysql_query("set names 'utf8' ");
mysql_select_db("classdb", $db);
$status = mysql_select_db("classdb");
?>