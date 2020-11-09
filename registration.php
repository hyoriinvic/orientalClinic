<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8"   />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/registration.css" />
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <image src="image/logo.png" alt="Kyunghee Oriental Clinic"/>

    <form id='register' name='register' method='post' action="./php/join.php">
        <div><input class="info" id="join_patientName" name = "join_patientName" required placeholder="이름" type="text" /></div>
        <div><input class="info" id="join_patientPhone" name = "join_patientPhone" required placeholder="전화번호" type="tel" /></div>
        <div>
            <input id="join_addressSearch" name="join_addressSearch" required placeholder="한의원 주소를 검색하세요." type="text" />
            <button class="btn" id="searchAddress">주소 검색</button>
        </div>
        <div><input class="info" id="join_juminNumber" name="join_juminNumber" required placeholder="주민등록번호" type="text" required pattern="[0-9]{13}" /></div>
        <div><input class="info" id="join_recommendPatient" name="join_recommendPatient" placeholder="소개환자(선택)" type="text" /></div>
    </form>

    <!-- <button class="btn" id="submitInfo" type="button"
        onclick="location.href='http://127.0.0.1/sympton1.php'">증상 입력하기</button> -->
    <button class="btn" id="submitInfo" type="button" onclick="AjaxCall();">증상 입력하기</button>

    <script type="text/javascript" src="./js/registeration.js"></script>
</body>

</html>
