<!DOCTYPE html>

<html lang="kr"> 

<head>
    <meta charset="utf-8" />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/sympton1/sympton1.css" />
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <img src="image/logo.png" alt="Kyunghee Oriental Clinic" />

    <span style="color:#9D1C20">해당되는 사항</span>만 클릭해주세요.

    <form>
        <div class="checkbox-container">
            <div>
                <input type="checkbox" class="btns" id="high_blood_pressure">
                <label class="btn1" for="high_blood_pressure">고혈압</label>
            </div>
            <div>
                <input type="checkbox" class="btns" id="diabetes">
                <label class="btn1" for="diabetes">당뇨</label>
            </div>
            <div>
                <input type="checkbox" class="btns" id="hepatitis">
                <label class="btn1" for="hepatitis">간염</label>
            </div>
            <div>
                <input type="checkbox" class="btns" id="allergy">
                <label class="btn1" for="allergy">알레르기</label>
            </div>
            <div>
                <input type="checkbox" class="btns" id="surgery_history">
                <label class="btn1" for="surgery_history">수술 이력</label>
            </div>
            <div>
                <input type="checkbox" class="btns" id="medication">
                <label class="btn1" for="medication">복용약</label>
            </div>
            <div>
                <input type="checkbox" class="btns" id="drinking">
                <label class="btn2" for="drinking">음주</label>
            </div>
            <div>
                <input type="checkbox" class="btns" id="smoking">
                <label class="btn2" for="smoking">흡연</label>
            </div>
        </div>
    </form>
    <footer>
        <!-- <button id="submitInfo" type="button" onclick="location.href='http://127.0.0.1/sympton2.php'">제출하기</button> -->
        <button id="submitInfo" type="button" onclick="isChecked();">제출하기</button>
    </footer>
    <script type="text/javascript" src="./js/selectedSymptom.js"></script>
    </body>
</html>
