<?php
    include "config.php";

    $join_patientName = $_POST['join_patientName']; //성명
    $join_patientPhone = $_POST['join_patientPhone']; //전화번호
    $join_addressSearch = $_POST['join_addressSearch']; //한의원 주소
    $join_juminNumber = $_POST['join_juminNumber']; //주민등록번호
    $join_recommendPatient = $_POST['join_recommendPatient']; //추천자

/*
오류로 인해 데이터를 직접 입력하고자 함 - 효린 노트북에서만 발생하는 syntax error
mariaDB 서버 관련 버전: 10.3.8 
라인 1에서 에러 발생한다고 또 반복됨 

$join_patientName = "김효린";
$join_patientPhone = "01000000000"; //전화번호
$join_addressSearch = "없음"; //한의원 주소
$join_juminNumber = "0000001234567"; //주민등록번호
$join_recommendPatient = " "; //추천자
*/

//query 전송
    $sql = 'insert into patient_db (join_patientName, join_patientTel, join_addressSearch, join_juminNumber, join_recommendPatient)';
    $sql = $sql."values('$join_patientName', '$join_patientTel', '$join_addressSearch', '$join_juminNumber', '$join_recommendPatient')";
    if($mysqli->query($sql)){
        echo "<script>alert(\"회원가입이 완료되었습니다.\");</script>";
    }else{
        echo "<script>alert(\"회원가입에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };
    header('location:./sympton1.php');
mysqli_close($mysqlInfo);
?>

