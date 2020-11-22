<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8"   />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/registration.css" />
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('submitInfo').click(function(){
            var action = $('submitInfo').attr('action');
            var form_data = {
                join_patientName : $("$join_patientName").val(),
                join_patientTel : $("join_patientTel").val(),
                join_addressSearch : $("join_addressSearch").val(), //한의원 주소 (우편번호 + 주소) - 주소 API에서 가져옴
                join_addressDetail : $("join_addressDetail").val(), //상세 주소 - 사용자가 입력할 
                join_addressExtra : $("join_addressExtra").val(), //한의원 주소 (참고 주소) - 주소 API에서 가져옴
                join_juminNumber : $("join_juminNumber").val(),
                join_recommendPatient : $("join_recommendPatient").val()
            };
            $.ajax({
                type:'POST',
                url:action,
                data:form_data,
                success:function(response){
                    if(response.trim() == 'success'){
                        $('msg').html('<p>회원가입성공!</p>')
                    }else{
                        $('msg').html('<p>회원가입실패!</p>')
                    }
                },
                error:function(){
                    $('msg').html('<h2>error</h2>');
                }
            });
        });
    });
    </script>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
        function sample6_execDaumPostcode() {
            new daum.Postcode({
                oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                    // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var addr = ''; // 주소 변수
                    var extraAddr = ''; // 참고항목 변수

                    //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        addr = data.roadAddress;
                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        addr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                    if(data.userSelectedType === 'R'){
                        // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                        // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                        if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                            extraAddr += data.bname;
                        }
                        // 건물명이 있고, 공동주택일 경우 추가한다.
                        if(data.buildingName !== '' && data.apartment === 'Y'){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                        if(extraAddr !== ''){
                            extraAddr = ' (' + extraAddr + ')';
                        }
                        // 조합된 참고항목을 해당 필드에 넣는다.
                        document.getElementById("join_addressExtra").value = extraAddr;
                    
                    } else {
                        document.getElementById("join_addressExtra").value = '';
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('join_addressSearch').value = data.zonecode + " " + addr;
                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById("join_addressDetail").focus();
                }
            }).open();
        }
    </script>
</head>

<body>
    <image src="image/logo.png" alt="Kyunghee Oriental Clinic"/>

    <form id='register' name='register' method='post' action="./php/join.php">
        <div><input class="info" id="join_patientName" name = "join_patientName" required placeholder="이름" type="text" required/></div>
        <div><input class="info" id="join_patientTel" name = "join_patientTel" required placeholder="전화번호" type="tel" required/></div>
        <div>
            <input id="join_addressSearch" name="join_addressSearch" required placeholder="한의원 주소를 검색하세요." type="text" />
            <button class="btn" id="searchAddress" onclick="sample6_execDaumPostcode()">주소 검색</button>
        </div>
        <div><input class="info" id="join_addressDetail" name = "join_addressDetail" required placeholder="상세 주소" type="text"/></div>
        <div><input class="info" id="join_addressExtra" name = "join_addressExtra" required placeholder="참고 항목" type="text"/></div>
        <div><input class="info" id="join_juminNumber" name="join_juminNumber" required placeholder="주민등록번호" type="text" required pattern="[0-9]{13}" /></div>
        <div><input class="info" id="join_recommendPatient" name="join_recommendPatient" placeholder="소개환자(선택)" type="text" /></div>
    <button class="btn" id="submitInfo" type="submit">증상 입력하기</button>
</form>
</body>

</html>
