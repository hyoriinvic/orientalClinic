// AJAX를 이용해 서버에 '환자 개인 정보'를 저장
function patientData() {
    var patientInfo = $("#register").serialize();

    console.log(patientInfo);
    return patientInfo;
}

function AjaxCall(method) {
    var action = $('#register').attr('action');

    $.ajax({
        type: 'POST',
        url: action,
        data: patientData(),
        success: function (response) {
            if(response.trim() == 'success'){
                sessionStorage.setItem('join_patientName', patientData.join_patientName);
                $('#msg').html('<p>회원가입 성공!</p>')
                Headers('Location :./sympton1.php');
            }else{
                $('#msg').html('<p>회원가입 실패</p>');
                history.back();
            }
        },
        error: function () {
            $('#msg').html('<h2>error</h2>');
        }
    });
}
