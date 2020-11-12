<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName) or die("db connect error");
    mysql_select_db($mysql_database, $db) or die("db connect error");
?>
