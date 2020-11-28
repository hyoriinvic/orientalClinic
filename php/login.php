
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


    if(isset($_POST['join_patientName']) && isset($_POST['join_patientTel'])){
    
        $join_patientName = $_POST['join_patientName'];
        $join_patientTel = $_POST['join_patientTel'];

        $query = "SELECT * FROM patient_db WHERE join_patientName = '$join_patientName' AND join_patientTel = '$join_patientTel'";
        
        $result = mysqli_query($connect,$query);

        $row = mysqli_fetch_array($result);

        if($join_patientName === $row['join_patientName'] && $join_patientTel === $row['join_patientTel'])
        {
            session_start();
            $_SESSION['join_patientName'] = $row['join_patientName'];
            $_SESSION['join_patientTel'] = $row['join_patientTel'];
        } else {
            echo "<script>alert('입력한 정보가 일치하지 않습니다.');</script>";
        }

        echo "success";
        //header('location:/symptom1.html');
    }else{
        echo "check post values.";
    }

?>