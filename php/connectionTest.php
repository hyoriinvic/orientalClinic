<!-- 테스트 결과: 연결 성공  -->
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MySQL-PHP 연결 테스트</title>
</head>

<body>
<?php
echo "MySql-PHP 연결 테스트<br>";

$host = 'localhost'; // 호스트명
$user = 'root'; // 계정명
$pw = 'orientalclinic123'; // 비밀번호
$dbName = 'oriental'; // 데이터베이스명

$db = mysqli_connect($host, $user, $pw, $dbName); //MySQL 연결

if ($db) {
    echo "connect : Success<br>";
} else {
    echo "Connect : Fail<br>";
}

$result = mysqli_query($db, 'SELECT VERSION() as VERSION'); //MySQL 쿼리 실행
$data = mysqli_fetch_assoc($result); //MySQL 레코드 가져오기
echo $data['VERSION'];
?>
</body>
</html>