// AJAX를 이용해 서버에 '환자 개인 정보'를 저장
function patientData() {
    var patientInfo = $("#register").serialize();

    console.log(patientInfo);
    return patientInfo;
}

function AjaxCall(method) {
    var action = $('#register').attr('action');

    $.ajax({
        type: method,
        url: action,
        data: patientData(),
        success: function (response) {
            alert("Success");
        },
        error: function () {
            $('#msg').html('<h2>error</h2>');
        }
    });
}
