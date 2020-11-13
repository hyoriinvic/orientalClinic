<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script type = "text/javascript">
    $(document).ready(function(){
        $('#submitInfo').click(function(){
            var action = $('#Login').attr('action');
            var form_data = {
                join_patientName : $("#join_patientName").val(),
                join_patientTel : $("#join_patientTel").val()
            };
            $.ajax({
                type:'POST',
                url:action,
                data:form_data,
                success:function(response){
                    if(response){
                        
                        if (typeof(Storage) !== "undefined") {
                            // Store
                            sessionStorage.setItem('join_patientName',form_data.join_patientName);
                            // Retrieve
                            //document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
                        }
                    }else{
                    }
                },
                error:function(){
                    $('#msg').html('<h2>error</h2>');
                }
            });
        });
    });
    </script>

<body>
    <img src="image/logo.png" alt="Kyunghee Oriental" />

    <form id='Login' name='Login' action='./php/login.php' method='post'>
        <div><input class="info" id="join_patientName" name = "join_patientName" required placeholder="  이름" autocomplete='off' type="text" /></div>
        <div><input class="info" id="join_patientTel" name = "join_patientTel" required placeholder="  전화번호" autocomplete='off' type="tel" /></div>
    <div>
        <button id="submitInfo" type="submit">증상 입력하기</button>
    </div>
</form>
    <div>
        <span>처음 방문하셨습니까?</span>
        <a href="./registration.php" target="_self">환자등록</a>
    </div>

    <!-- <script type="text/javascript" src="/js/main.js"></script> -->
</body>
</html>
