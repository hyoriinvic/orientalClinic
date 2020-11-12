// 제출하기 버튼을 누를 경우,          
$(document).ready(function () {
    $('submitInfo').click(function () {
        var action = $('submitInfo').attr('action');
        var form_data = {
            high_blood_pressure: $("$high_blood_pressure").val(),
            diabetes: $("diabetes").val(),
            hepatitis: $("hepatitis").val(),
            allergy: $("allergy").val(),
            surgery_history: $("surgery_history").val(),
            medication: $("medication").val(),
            drinking: $("drinking").val(),
            smoking: $("smoking").val()
        };

        $.ajax({
            type: 'POST',
            url: action,
            data: form_data,
            success: function (response) {
                if (response.trim() == 'success') {
                    $('msg').html('<p>증상입력 성공!</p>')
                } else {
                    $('msg').html('<p>증상입력 실패!</p>')
                }
            },
            error: function () { $('msg').html('<h2>error</h2>'); }
        });
    });
});