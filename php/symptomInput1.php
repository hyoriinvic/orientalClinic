<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName); 
    
    $return_array = Array();
    if(isset($_POST['high_blood_pressure']) && isset($_POST['diabetes']) && isset($_POST['hepatitis']) 
    && isset($_POST['allergy']) && isset($_POST['surgery_history']) && isset($_POST['medication']) 
    && isset($_POST['drinking']) && isset($_POST['smoking'])){

        $sql = 'INSERT INTO patient_db (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
        $sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";
        $result = mysqli_query($connect, $sql);

        $while($row = mysqli_fetch_array($result)) {
            $row_array['high_blood_pressure'] = $row['high_blood_pressure'];
            $row_array['diabetes'] = $row['diabetes'];
            $row_array['hepatitis'] = $row['hepatitis'];
            $row_array['allergy'] = $row['allergy'];
            $row_array['surgery_history'] = $row['surgery_history'];
            $row_array['medication'] = $row['medication'];
            $row_array['drinking'] = $row['drinking'];
            $row_array['smoking'] = $row['smoking'];
            array_push($return_array, $row_array);
        }
        
        echo json_encode($return_array, JSON_UNESCAPED_UNICODE);
    }
    

?>