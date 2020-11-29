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

    if(isset($_POST['neck']) && isset($_POST['sholder']) && isset($_POST['elbow']) && isset($_POST['waist'])
    && isset($_POST['wrist']) && isset($_POST['chest']) && isset($_POST['stomach']) && isset($_POST['pelvis'])
    && isset($_POST['knee']) && isset($_POST['ankle']) && isset($_POST['eye']) && isset($_POST['ear'])  && isset($_POST['nose']) 
    && isset($_POST['mouth']) && isset($_POST['other']))
	{   
        session_start();
        
        if(isset($_SESSION['join_patientName']) && isset($_SESSION['join_patientTel'])){
            $join_patientName = $_SESSION['join_patientName'];
            $join_patientTel = $_SESSION['join_patientTel'];
        } else {
            echo "<script>alert('세션에서 정보를 불러오지 못했습니다.');</script>";
        }
        
        $neck = $_POST['neck']; 
        $sholder = $_POST['sholder'];
        $elbow = $_POST['elbow']; 
        $waist = $_POST['waist']; 
        $wrist = $_POST['wrist'];
        $chest = $_POST['chest']; 
        $stomach = $_POST['stomach']; 
        $pelvis = $_POST['pelvis'];
        $knee = $_POST['knee'];
        $ankle = $_POST['ankle'];
        $eye = $_POST['eye'];
        $ear = $_POST['ear'];
        $nose = $_POST['nose'];
        $mouth = $_POST['mouth'];
        $other = $_POST['other'];
        

        $sql_new = "INSERT INTO patient_symptom2 
        (join_patientName, join_patientTel, neck, sholder, elbow, waist, wrist, chest, stomach, pelvis, knee, ankle, eye, ear, nose, mouth, other)";
        $sql_new = $sql_new."values('$join_patientName', '$join_patientTel', '$neck', '$sholder', '$elbow', '$waist', '$wrist', '$chest', '$stomach', '$pelvis', '$knee', '$ankle', '$eye', '$ear', '$nose', '$mouth', '$other')";

        $result_new = mysqli_query($connect, $sql_new);

        // echo "success.";
    
    }else{
        // echo "check post values.";
    }
        mysqli_close($connect);
        session_destroy();
?>
