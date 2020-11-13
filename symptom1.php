<!DOCTYPE html>
<html lang="kr"> 
<head>
    <meta charset="utf-8" />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/symptom1/symptom1.css" />

    <?php
    session_cache_expire(5); //세션이 유지될 시간을 입력합니다.

    session_start();

    $join_patientName	= $_SESSION['join_patientName'];   //세션에서 값을 받아옵니다.
    $join_patientTel = $_SESSION['join_patientTel']; //세션에서 값을 받아옵니다.

    if(!$join_patientName) {
        header('location:/main.php');
      //아이디값이 없을경우 세션이 만료되었다는 의미이므로 처리할 코드를 입력합니다.
    }	
    ?>

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- js -->
    <!-- <script type="text/javascript" src="./js/selectedSymptom.js"></script> check 되면 value 바꿔주는 isChecked() 
    <script type="text/javascript" src="./js/postSymptom1.js"></script>--> 
    <script type="text/javascript"> 
        // 제출하기 버튼을 누를 경우,          
        $(document).ready(function(){
            $('submitInfo').click(function(){

                let btns = document.getElementsByClassName("btns");

                $.each(btns, function (index, item) {
                    if ($(item).is(":checked")) {
                    $(item).val() = "1";
                    } else {
                    $(item).val() = "0";
                    }
                })

                console.log

                var action = $('submitInfo').attr('action');
                var form_data = {
                    high_blood_pressure : $("$high_blood_pressure").val(),
                    diabetes : $("diabetes").val(),
                    hepatitis : $("hepatitis").val(),
                    allergy : $("allergy").val(),
                    surgery_history : $("surgery_history").val(),
                    medication : $("medication").val(),
                    drinking : $("drinking").val(),
                    smoking : $("smoking").val()
                };
                    
        $.ajax({
            type:'POST',
            url:action,
            data:form_data,
            success:function(response){
                if(response.trim() == 'success'){
                    $('msg').html('<p>증상입력 성공!</p>')
                }else{
                    $('msg').html('<p>증상입력 실패!</p>')
                }
            },
            error:function(){ $('msg').html('<h2>error</h2>');}
            });
        });
    });
    </script>
</head>

<body>
    <img src="image/logo.png" alt="Kyunghee Oriental Clinic" />
    <span style="color:#9D1C20">해당되는 사항</span>만 클릭해주세요.
    <form action = './php/symptomInput1.php' method = "POST">
        <div class="checkbox-container">
            <div>
                <input type="checkbox" name = 'high_blood_pressure' class="btns" id="high_blood_pressure" value='1'>
                <label class="btn1" for="high_blood_pressure">고혈압</label>
            </div>
            <div>
                <input type="checkbox" name = 'diabetes' class="btns" id="diabetes" value='1'>
                <label class="btn1" for="diabetes">당뇨</label>
            </div>
            <div>
                <input type="checkbox" name = 'hepatitis' class="btns" id="hepatitis" value='1'>
                <label class="btn1" for="hepatitis">간염</label>
            </div>
            <div>
                <input type="checkbox" name = 'allergy' class="btns" id="allergy" value='1'>
                <label class="btn1" for="allergy">알레르기</label>
            </div>
            <div>
                <input type="checkbox" name = 'surgery_history' class="btns" id="surgery_history" value='1'>
                <label class="btn1" for="surgery_history">수술 이력</label>
            </div>
            <div>
                <input type="checkbox" name = 'medication' class="btns" id="medication" value='1'>
                <label class="btn1" for="medication">복용약</label>
            </div>
            <div>
                <input type="checkbox" name = 'drinking' class="btns" id="drinking" value='1'>
                <label class="btn2" for="drinking">음주</label>
            </div>
            <div>
                <input type="checkbox" name = 'smoking' class="btns" id="smoking" value='1'>
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

