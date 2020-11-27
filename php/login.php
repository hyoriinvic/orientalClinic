
<?php
    header("Content-Type:application/json; charset=utf-8");
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT');

    include './config.php';

    if(isset($_POST['join_patientName']) && isset($_POST['join_patientTel'])){
    
        $join_patientName = $_POST['join_patientName'];
        $join_patientTel = $_POST['join_patientTel'];

        $query = "SELECT * FROM patient_db WHERE join_patientName = '$join_patientName' AND join_patientTel = '$join_patientTel'";
        
        $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        $result = mysqli_query($connection,$query);

        echo "success";
        //header('location:/symptom1.html');
    }else{
        echo "check post values.";
    }

?>