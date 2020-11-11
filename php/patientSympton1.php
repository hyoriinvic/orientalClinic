<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName);

    $patientSytmpton1 = $_POST['patientSytmpton1']; //환자 증상1 

//query 전송
    $sql = 'INSERT INTO patient_sympton (join_symptons1)';
    $sql = $sql."values('$join_symptons1')";
    
    if($connect->query($sql)){
        echo "<script>alert(\"증상 입력이 완료되었습니다.\");</script>";
    }else{
        echo "<script>alert(\"증상 입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };

    // header('location:/sympton1.php');
    
    mysqli_close($mysqli);
    
?>