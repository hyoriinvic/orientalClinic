<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName); 
    session_start();
 
    $high_blood_pressure = $_POST['high_blood_pressure']; //고혈압
    $diabetes = $_POST['diabetes']; //당뇨
    $hepatitis = $_POST['hepatitis']; //간염
    $allergy = $_POST['allergy']; //알레르기
    $surgery_history = $_POST['surgery_history']; //수술 이력
    $medication = $_POST['medication']; //복용약
    $drinking = $_POST['drinking']; //음주
    $smoking = $_POST['smoking']; //흡연
    

    $sql = "UPDATE patient_db SET 
            high_blood_pressure = '$high_blood_pressure',
            diabetes  = '$diabetes',
            hepatitis = '$hepatitis',
            allergy = '$allergy',
            surgery_history = '$surgery_history',
            medication = '$medication',
            drinking = '$drinking',
            smoking = '$smoking' 
            WHERE join_patientName = $_SESSION[join_patientName] AND join_patientTel = $_SESSION[join_patientTel]";

    //'INSERT INTO patient_db (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
    //$sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";
    
    if(query($connect)->query($sql)){
        echo "<script>alert(\"증상입력이 완료되었습니다.\");</script>";
    } else{
        echo "<script>alert(\"증상입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };
    header('location:/symptom2.php');

    mysqli_close($connect);
?>