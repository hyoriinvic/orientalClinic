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
            if (response.trim() == 'success') {
                sessionStorage.setItem('join_patientName', patientData.join_patientName);
                $('#msg').html('<p>회원가입 성공!</p>')
                Headers('Location :/sympton1.php');
            } else {
                $('#msg').html('<p>회원가입 실패</p>');
                history.back();
            }
        },
        error: function () {
            $('#msg').html('<h2>error</h2>');
        }
    });
}

//201110_민수_AJAX를 이용한 회원가입을 registration.php에 옮겨서 구현했습니다.
// 왜냐하면 위 기능을 살려서 가입하면 registration.js + join.php 가 중복이 되서 
// 따블로 회원가입이 되기 때문..+ js에만 회원가입 구현기능을 하는 법을 잘 모르겠어서..입니다
