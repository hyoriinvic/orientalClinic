<!doctype html>

<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>Login </title>
    </head>

    <body>
        <?php
        $host = 'localhost';
        $user = 'root';
        $pw = 'autoset';
        $dbName = 'kyunghee';
        $connect = new mysqli($host, $user, $pw, $dbName);

        $join_patientName=$_POST['join_patientName'];
        $join_patientTel=$_POST['join_patientTel'];

        $query = "SELECT * FROM patient_db WHERE join_patientName = '$join_patientName' AND join_patientTel = '$join_patientTel'";

        $result = mysqli_query($connect,$query);
        $row = mysqli_fetch_array($result);

        if($join_patientName === $row['join_patientName'] && $join_patientTel === $row['join_patientTel'])
        {
        session_start();
        $_SESSION['join_patientName'] = $row['join_patientName'];
        $_SESSION['join_patientTel'] = $row['join_patientTel'];
        ?>

        <script>
        alert("로그인 되었습니다.");
        location.href='/symptom1-1.php';
        </script>


        <?php
        }
        else
        {
            echo"session fail";
        ?>
            <script>
            alert("입력한 정보가 일치하지 않습니다.");
            history.back()
            </script>
        <?php
        }
        ?>
    </body>
</html>