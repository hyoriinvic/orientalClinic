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
                join_addressSearch : $("join_addressSearch").val(),
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
</head>

<body>
    <image src="image/logo.png" alt="Kyunghee Oriental Clinic"/>

    <form id='register' name='register' method='post' action="./php/join.php">
        <div><input class="info" id="join_patientName" name = "join_patientName" required placeholder="이름" type="text" required/></div>
        <div><input class="info" id="join_patientTel" name = "join_patientTel" required placeholder="전화번호" type="tel" required/></div>
        <div>
            <input id="join_addressSearch" name="join_addressSearch" required placeholder="한의원 주소를 검색하세요." type="text" />
            <button class="btn" id="searchAddress">주소 검색</button>
        </div>
        <div><input class="info" id="join_juminNumber" name="join_juminNumber" required placeholder="주민등록번호" type="text" required pattern="[0-9]{13}" /></div>
        <div><input class="info" id="join_recommendPatient" name="join_recommendPatient" placeholder="소개환자(선택)" type="text" /></div>
    <button class="btn" id="submitInfo" type="submit">증상 입력하기</button>
</form>
</body>

</html>
