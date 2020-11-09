<!-- 민수쌤 DB 기준 configuration

$mysql_hostname = "localhost";
$mysql_user = "apple3095";
$mysql_password = "ye6428ye!";
$mysql_database = "kyunghee_db";

$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
mysql_select_db($mysql_database, $db) or die("db connect error");
-->


<?php
$hostName = "localhost";
$user = "root";
$password = "orientalclinic123";
$dbName = "oriental";

// mysql_something 이 지원되지 않는 호스팅이기에,
// mysqli_something 으로 변경

$mysqli = mysqli_connect($hostName, $user, $password) or die("db connect error");

//mysqli_select_db(연결 객체, DB명)
//mysqli_connect 를 통해 연결된 객체가 선택하고 있는 DB를 다른 DB로 바꾸기 위해 사용?
$db_handle = mysqli_select_db($mysqli, $dbName) or die("db connect error");
?>