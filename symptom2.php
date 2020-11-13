<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8" />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/symptom2/symptom2.css" />
    
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
    <!-- <script type="text/javascript" src="./js/selectedSymptom.js"></script> -->
    <!-- <script type="text/javascript" src="./js/postSymptom2.js"></script> -->
    <script type="text/javascript">
        // 제출하기 버튼을 누를 경우,          
        $(document).ready(function(){
            $('submitInfo').click(function(){
                var action = $('submitInfo').attr('action');
                var form_data = {
                    neck : $("neck").val(),
                    sholder : $("sholder").val(),
                    elbow : $("elbow").val(),
                    waist : $("waist").val(),
                    wrist : $("wrist").val(),
                    chest : $("chest").val(),
                    stomach : $("stomach").val(),
                    pelvis : $("pelvis").val(),
                    knee : $("knee").val(),
                    ankle : $("ankle").val(),
                    eye : $("eye").val(),
                    nose : $("nose").val(),
                    mouth : $("mouth").val(),
                    other : $("other").val()
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
    <img id="body" src="image/body.png" />
    <img id="head" src="image/head.png" />
    <form action = './php/symptomInput2.php' method = "POST">
        <section class="checkbox-container" id="body-img">
            <div>
                <input type="checkbox" class="btns" value="1" id="neck" name="neck">
                <label class="small-btn" for="neck">목</label>
                <hr class="diagonal" id="line1" width="178.99px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body1">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="sholder" name="sholder">
                <label class="small-btn" for="sholder">어깨</label>
                <hr class="diagonal" id="line2" width="122.1px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body2">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="elbow" name="elbow">
                <label class="small-btn" for="elbow">팔꿈치</label>
                <hr class="diagonal" id="line3" width="99.96px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body3">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="waist" name="waist">
                <label class="small-btn" for="waist">허리</label>
                <hr class="diagonal" id="line4" width="179.62px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body4">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="wrist" name="wrist">
                <label class="small-btn" for="wrist">손,손목</label>
                <hr class="diagonal" id="line5" width="97.65px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body5">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="chest" name="chest">
                <label class="small-btn" for="chest">가슴</label>
                <hr class="diagonal" id="line6" width="145px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body6">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="stomach" name="stomach">
                <label class="small-btn" for="stomach">복부</label>
                <hr class="diagonal" id="line7" width="145.34px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body7">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="pelvis" name="pelvis">
                <label class="small-btn" for="pelvis">골반</label>
                <hr class="diagonal" id="line8" width="110.04px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body8">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="knee" name="knee">
                <label class="small-btn" for="knee">무릎</label>
                <hr class="diagonal" id="line9" width="120.54px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body9">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="ankle" name="ankle">
                <label class="small-btn" for="ankle">발,발목</label>
                <hr class="diagonal" id="line10" width="134.33px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body10">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
        </section>
        <section class="checkbox-container" id="head-img">
            <div>
                <input type="checkbox" class="btns" value="1" id="eye" name="eye">
                <label class="small-btn" for="eye">눈</label>
                <hr class="diagonal" id="line11" width="152px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head11">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="ear" name="ear">
                <label class="small-btn" for="ear">귀</label>
                <hr class="diagonal" id="line12" width="139.09px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head12">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="nose" name="nose">
                <label class="small-btn" for="nose">코</label>
                <hr class="diagonal" id="line13" width="219.62px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head13">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" value="1" id="mouth" name ="mouth">
                <label class="small-btn" for="mouth">입</label>
                <hr class="diagonal" id="line14" width="258.26px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head14">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
        </section>
        <section class="checkbox-container">
            <input type="checkbox" class="btns" value="1" id="other" name="other">
            <label class="btn" for="other">기타</label>
        </section>
        <button id="submitInfo" class="btn submitInfo" type="submit">접수하기</button>
    </form>
</body>

</html>
