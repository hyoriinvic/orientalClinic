<?php
        $box = implode(",",$btns);
        $sql = 'insert into patient_db (high_blood_pressure)';
        $sql = $sql."values('high_blood_pressure')";
        if($connect->query($sql)){
            echo "<script>alert(\"다음 증상을 입력해주세요.\");</script>";
        }else{
            echo "<script>alert(\"증상입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
        };
        header('location:/sympton2.php');
    ?>