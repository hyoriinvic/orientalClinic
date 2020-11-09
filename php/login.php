<!doctype html>

<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>Login </title>
    </head>

    <body>
        <?php

// include "config.php"

$hostName = "localhost";
$user = "root";
$password = "orientalclinic123";
$dbName = "oriental";
$mysqli = mysqli_connect($hostName, $user, $password);
$db_handle = mysqli_select_db($mysqli, $dbName);

$join_patientName = $_POST['join_patientName'];
$join_patientPhone = $_POST['join_patientPhone'];

$existingPatient = "SELECT * FROM patient_info WHERE join_patientName = '$join_patientName' AND join_patientPhone = '$join_patientPhone'";

$result = mysqli_query($mysqli, $existingPatient);
$row = mysqli_fetch_array($result);

if ($join_patientName === $row['join_patientName'] && $join_patientPhone === $row['join_patientPhone']) {
    //session , local
    session_start();
    $_SESSION['join_patientName'] = $row['join_patientName'];
    $_SESSION['join_patientPhone'] = $row['join_patientPhone'];

    ?>
            <script>
                alert("Success.");
                location.href='http://127.0.0.1/sympthon1.php';
            </script>
        <?php
} else {
    echo "session fail";
    ?>
            <script>
                alert("Fail. Information not matched.");
                history.back()
            </script>
        <?php
}

?>
    </body>
</html>