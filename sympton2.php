<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8" />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/sympton2/sympton2.css" />
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- 접수 완료  팝업 : 사용 X 
        <script language="javascript">
        function btn_alert(){
            alert("접수가 완료되었습니다.")
            // location.href='http://127.0.0.1/main.php' /* 클릭 시 맨 처음 페이지로 이동*/
        }</script>
-->
</head>

<body>
    <img id="body" src="image/body.png" />
    <img id="head" src="image/head.png" />
    <form>
        <section class="checkbox-container" id="body-img">
            <div>
                <input type="checkbox" class="btns" id="neck">
                <label class="small-btn" for="neck">목</label>
                <hr class="diagonal" id="line1" width="178.99px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body1">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="sholder">
                <label class="small-btn" for="sholder">어깨</label>
                <hr class="diagonal" id="line2" width="122.1px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body2">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="elbow">
                <label class="small-btn" for="elbow">팔꿈치</label>
                <hr class="diagonal" id="line3" width="99.96px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body3">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="waist">
                <label class="small-btn" for="waist">허리</label>
                <hr class="diagonal" id="line4" width="179.62px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body4">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="wrist">
                <label class="small-btn" for="wrist">손,손목</label>
                <hr class="diagonal" id="line5" width="97.65px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body5">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="chest">
                <label class="small-btn" for="chest">가슴</label>
                <hr class="diagonal" id="line6" width="145px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body6">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="stomach">
                <label class="small-btn" for="stomach">복부</label>
                <hr class="diagonal" id="line7" width="145.34px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body7">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="pelvis">
                <label class="small-btn" for="pelvis">골반</label>
                <hr class="diagonal" id="line8" width="110.04px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body8">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="knee">
                <label class="small-btn" for="knee">무릎</label>
                <hr class="diagonal" id="line9" width="120.54px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body9">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="ankle">
                <label class="small-btn" for="ankle">발,발목</label>
                <hr class="diagonal" id="line10" width="134.33px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body10">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
        </section>
        <section class="checkbox-container" id="head-img">
            <div>
                <input type="checkbox" class="btns" id="eye">
                <label class="small-btn" for="eye">눈</label>
                <hr class="diagonal" id="line11" width="152px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head11">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="ear"">
                <label class="small-btn" for="ear"">귀</label>
                <hr class="diagonal" id="line12" width="139.09px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head12">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="nose">
                <label class="small-btn" for="nose">코</label>
                <hr class="diagonal" id="line13" width="219.62px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head13">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input type="checkbox" class="btns" id="mouth">
                <label class="small-btn" for="mouth">입</label>
                <hr class="diagonal" id="line14" width="258.26px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head14">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
        </section>
        <section class="checkbox-container">
            <input type="checkbox" class="btns" id="else">
            <label class="btn" for="else">기타</label>
        </section>
        <button class="btn submitInfo" type="button" onclick="isChecked();">접수하기</button>
    </form>
    <script type="text/javascript" src="./js/selectedSymptom.js"></script>
</body>

</html>
