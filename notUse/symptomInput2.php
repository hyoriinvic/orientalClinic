// 수정 필요
<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName); 

    $neck = $_POST['neck']; //목
    $sholder = $_POST['sholder']; //어깨
    $elbow = $_POST['elbow']; //팔꿈치
    $waist = $_POST['waist']; //허리
    $wrist = $_POST['wrist']; //손, 손목
    $chest = $_POST['chest']; //가슴
    $stomach = $_POST['stomach']; //복부
    $pelvis = $_POST['pelvis']; //골반
    $knee = $_POST['knee']; //무릎
    $ankle = $_POST['ankle']; //발, 발목

    $eye = $_POST['eye']; //눈
    $ear = $_POST['ear']; //귀
    $nose = $_POST['nose']; //코
    $mouth = $_POST['mouth']; //입

    $other = $_POST['other']; //기타

    $sql = 'INSERT INTO patient_db (neck, sholder, elbow, waist, wrist, chest, stomach, pelvis, knee, ankle, eye, ear, nose, mouth, other)';
    $sql = $sql."values('$neck', '$sholder', '$elbow', '$waist', '$wrist', '$chest', '$stomach', '$pelvis', '$knee', '$ankle', '$eye', '$ear', '$nose', '$mouth', '$other')";
    
    if($connect->query($sql)){
        echo "<script>alert(\"증상입력이 완료되었습니다.\");</script>";
    } else{
        echo "<script>alert(\"증상입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };
    session_destroy();
    mysqli_close($connect);
    header('location:/main.php');
?>