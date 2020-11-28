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

    if(isset($_POST['high_blood_pressure']) && isset($_POST['diabetes']) && isset($_POST['hepatitis']) && isset($_POST['allergy'])
    && isset($_POST['surgery_history'])&& isset($_POST['medication'])&& isset($_POST['drinking'])&& isset($_POST['smoking']))
	{
        session_start();
        $join_patientName = $_SESSION['join_patientName'];
        $join_patientTel = $_SESSION['join_patientTel'];
        
        $high_blood_pressure = $_POST['high_blood_pressure']; //고혈압
        $diabetes = $_POST['diabetes']; //당뇨
        $hepatitis = $_POST['hepatitis']; //간염
        $allergy = $_POST['allergy']; //알레르기
        $surgery_history = $_POST['surgery_history']; //수술 이력
        $medication = $_POST['medication']; //복용약
        $drinking = $_POST['drinking']; //음주
        $smoking = $_POST['smoking']; //흡연

        $sql = "UPDATE patient_db SET 
            `high_blood_pressure` = '$high_blood_pressure',
            `diabetes`  = '$diabetes',
            `hepatitis` = '$hepatitis',
            `allergy` = '$allergy',
            `surgery_history` = '$surgery_history',
            `medication` = '$medication',
            `drinking` = '$drinking',
            `smoking` = '$smoking' 
            WHERE join_patientName = '$join_patientName' AND join_patientTel = '$join_patientTel'";

        $result = mysqli_query($connect, $sql);

        echo "success.";
    
    }else{
        echo "check post values.";
    }
        mysqli_close($connect);
?>



