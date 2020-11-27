<?php
    header("Content-Type:application/json; charset=utf-8");
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT');
    
    include './config.php';
    
    if(isset($_POST['high_blood_pressure']))
	{
        session_start();
        $high_blood_pressure = $_POST['high_blood_pressure']; 
        $join_patientName = $_SESSION['join_patientName'];
        $join_patientTel = $_SESSION['join_patientTel'];

        
        $sql = "UPDATE patient_db SET high_blood_pressure = '$high_blood_pressure' 
            WHERE join_patientName = '$join_patientName' AND join_patientTel = '$join_patientTel'";

        $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        $result = mysqli_query($connection, $sql);

        echo "success.";
    
    }else{
        echo "check post values.";
    }

?>



