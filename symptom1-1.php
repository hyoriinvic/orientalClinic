<!DOCTYPE html>
<html lang="kr"> 
<head>
    <meta charset="utf-8" />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/symptom1/symptom1.css" />

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- js -->
    <!-- <script type="text/javascript" src="./js/selectedSymptom.js"></script> check 되면 value 바꿔주는 isChecked() 
    <script type="text/javascript" src="./js/postSymptom1.js"></script>--> 
    <script type="text/javascript"> 
        
        // 제출하기 버튼을 누를 경우,          
        $(document).ready(function(){
            $('#submitInfo').click(function(){

            var data = isChecked();
            //console.log(data.length);
                    
           
            });
        });

        function isChecked() {
            let btns = document.getElementsByClassName("btns");
            // console.log(btns); // 클래스명이 btn1인 elements 배열

            var checked = []; //check 여부를 저장할 배열 (1: checked, 0: not checked)

            $.each(btns, function (index, item) {
                if (!$(item).is(":checked")) {
                    $(item).val("0");
                }else{
                    $(item).val("1");
                }
                checked.push($(item).val());            
                console.log($(item).val());
            })
            console.log("form data : " + checked);
            return checked;
        }
    </script>
</head>

<body>
    <img src="image/logo.png" alt="Kyunghee Oriental Clinic" />
    <span style="color:#9D1C20">해당되는 사항</span>만 클릭해주세요.
    <form action = './php/symptomInput1.php' method = "POST">
        <div class="checkbox-container">
            <div>
                <input type="checkbox" name = 'high_blood_pressure' class="btns" id="high_blood_pressure" value="0">
                <label class="btn1" for="high_blood_pressure">고혈압</label>
            </div>
            <div>
                <input type="checkbox" name = 'diabetes' class="btns" id="diabetes" value="0">
                <label class="btn1" for="diabetes">당뇨</label>
            </div>
            <div>
                <input type="checkbox" name = 'hepatitis' class="btns" id="hepatitis" value="0">
                <label class="btn1" for="hepatitis">간염</label>
            </div>
            <div>
                <input type="checkbox" name = 'allergy' class="btns" id="allergy" value="0">
                <label class="btn1" for="allergy">알레르기</label>
            </div>
            <div>
                <input type="checkbox" name = 'surgery_history' class="btns" id="surgery_history" value="0">
                <label class="btn1" for="surgery_history">수술 이력</label>
            </div>
            <div>
                <input type="checkbox" name = 'medication' class="btns" id="medication" value="0">
                <label class="btn1" for="medication">복용약</label>
            </div>
            <div>
                <input type="checkbox" name = 'drinking' class="btns" id="drinking" value="0">
                <label class="btn2" for="drinking">음주</label>
            </div>
            <div>
                <input type="checkbox" name = 'smoking' class="btns" id="smoking" value="0">
                <label class="btn2" for="smoking">흡연</label>
            </div>
        </div>

        <!-- 페이지 이동 기능 잠깐 사용 X
        <button id="submitInfo" type="button" onclick="location.href='http://127.0.0.1/sympton2.php'">제출하기</button> 
        -->
        <button id="submitInfo" type="submit">제출하기</button>

    </form>
    </body>
</html>