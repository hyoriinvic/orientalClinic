<?php
    header("Content-Type:application/json; charset=utf-8");
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT');
    
    include './config.php';

    $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if($connect -> connect_errno){
        die("Connect Error: ".$connect -> connect_error);
    }

    if(isset($_POST['join_patientName']) && isset($_POST['join_patientTel']) && isset($_POST['join_addressSearch'])
        && isset($_POST['join_addressDetail']) && isset($_POST['join_addressExtra']) && isset($_POST['join_juminNumber']))
	{
        $join_patientName = $_POST['join_patientName']; //성명
        $join_patientTel = $_POST['join_patientTel']; //전화번호
        $join_addressSearch = $_POST['join_addressSearch']; //주소
        $join_addressDetail = $_POST['join_addressDetail']; //상세 주소
        $join_addressExtra = $_POST['join_addressExtra']; //참고 주소
        $join_juminNumber = $_POST['join_juminNumber']; //주민등록번호
        $join_recommendPatient = $_POST['join_recommendPatient']; //추천자
        
        //query 전송
        $sql = 'insert into patient_db (join_patientName, join_patientTel, join_addressSearch, join_addressDetail, join_addressExtra, join_juminNumber, join_recommendPatient)';
        $sql = $sql."values('$join_patientName', '$join_patientTel', '$join_addressSearch', '$join_addressDetail', '$join_addressExtra', '$join_juminNumber', '$join_recommendPatient')";

        $result = mysqli_query($connect, $sql);
        echo "success.";
    
    }else{
        echo "check post values.";
    }

    // mysqli_close($connect);
?>



