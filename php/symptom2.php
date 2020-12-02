<?php
    header("Content-Type:application/json; charset=utf-8");
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT');
    
    include './config.php';

    if(isset($_POST['neck'], 
    $_POST['sholder'],
    $_POST['elbow'],
    $_POST['waist'],
    $_POST['wrist'], 
    $_POST['chest'], 
    $_POST['stomach'],
    $_POST['pelvis'],
    $_POST['knee'],
    $_POST['ankle'],
    $_POST['eye'],
    $_POST['ear'],
    $_POST['nose'],
    $_POST['mouth'],
    $_POST['other']))
	{   
        session_start();
        
        if(isset($_SESSION['join_patientName'],$_SESSION['join_patientTel'])){
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
        
        $sql = "UPDATE patient_db SET 
        neck = '$neck',
        sholder = '$sholder',
        elbow = '$elbow',
        waist = '$waist',
        wrist = '$wrist',
        chest = '$chest',
        stomach = '$stomach',
        pelvis = '$pelvis',
        knee = '$knee',
        ankle = '$ankle',
        eye = '$eye',
        ear = '$ear',
        nose = '$nose',
        mouth = '$mouth',
        other = '$other'
        WHERE join_patientName = '$join_patientName' AND join_patientTel = '$join_patientTel'";

//'INSERT INTO patient_db (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
//$sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$result = mysqli_query($connection, $sql);

echo "success.";

}else{
echo "check post values.";
}



?>
