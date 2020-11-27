// 제출하기 버튼을 누를 경우,
$(document).ready(function () {
    alert(sessionStorage.getItem("join_patientName"));
    $('submitInfo').click(function () {
        var action = $('submitInfo').attr('action');
        var form_data = {
            neck: $("neck").val(),
            sholder: $("sholder").val(),
            elbow: $("elbow").val(),
            waist: $("waist").val(),
            wrist: $("wrist").val(),
            chest: $("chest").val(),
            stomach: $("stomach").val(),
            pelvis: $("pelvis").val(),
            knee: $("knee").val(),
            ankle: $("ankle").val(),
            eye: $("eye").val(),
            nose: $("nose").val(),
            mouth: $("mouth").val(),
            other: $("other").val()
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