<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/main.css" />
    <!-- jquery cdn -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  -->
</head>

<body>
    <img src="image/logo.png" alt="Kyunghee Oriental" />

    <form id='login' name='login' action='./php/login.php' method='post'>
        <div><input class="info" id="join_patientName" required placeholder="이름" autocomplete='off' type="text" /></div>
        <div><input class="info" id="join_patientPhone" required placeholder="전화번호" autocomplete='off' type="tel" /></div>
    </form>
    <div>
        <button id="submitInfo" type="button" onclick="location.href='http://127.0.0.1/sympton1.php'">증상 입력하기</button>
    </div>
    <div>
        <span>처음 방문하셨습니까?</span>
        <a href="http://127.0.0.1/registration.php" target="_self">환자등록</a>
    </div>

    <!-- <script type="text/javascript" src="/js/main.js"></script> -->
</body>

</html>

 <!--안녕하세요? 이런일이 가능하다니 세상 정말 좋아졌네요-->
