<?php
// mariaDB 서버 관련 버전: 10.3.8 
// 라인 1에서 에러 발생한다고 또 반복됨 

$hostName = "localhost";
$userName = "root";
$password = "orientalclinic123";
$dbName = "oriental";
$mysqlInfo = mysqli_connect($hostName, $userName, $password);
$dbHandled = mysqli_select_db($mysqlInfo, $dbName);

// $join_patientName = $_POST['join_patientName']; //성명
// $join_patientPhone = $_POST['join_patientPhone']; //전화번호
// $join_addressSearch = $_POST['join_addressSearch']; //한의원 주소
// $join_juminNumber = $_POST['join_juminNumber']; //주민등록번호
// $join_recommendPatient = $_POST['join_recommendPatient']; //추천자

$join_patientName = "김효린";
$join_patientPhone = "01000000000"; //전화번호
$join_addressSearch = "없음"; //한의원 주소
$join_juminNumber = "0000001234567"; //주민등록번호
$join_recommendPatient = " "; //추천자

//query 전송
$patientQuery = 'INSERT INTO patient_info (join_patientName, join_patientPhone, join_addressSearch, join_juminNumber, join_recommendPatient)';
$patientQuery = $patientQuery . "values ($join_patientName, $join_patientPhone, $join_addressSearch, $join_juminNumber, $join_recommendPatient)";

mysqli_query($mysqlInfo, $patientQuery);

if (mysqli_query($mysqlInfo, $patientQuery)) {
    echo "Success. ";
} else {
    echo "Fail. " . mysqli_error($mysqlInfo); //현재 등록에 실패했습니다 뜸
}

// header('location:http://127.0.0.1/registration.php');

mysqli_close($mysqlInfo);
?>

