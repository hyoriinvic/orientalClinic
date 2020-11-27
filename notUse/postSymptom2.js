// 제출하기 버튼을 누를 경우,          
$(document).ready(function () {
    $('submitInfo').click(function () {
        isChecked(); //체크 여부에 따라, value 변경 (1: checked, 0: not checked)

        var action = $('submitInfo').attr('action');
        var form_data = {
            neck: $("$neck").val(), //목
            sholder: $("sholder").val(), //어깨
            elbow: $("elbow").val(), //팔꿈치
            waist: $("waist").val(), //허리
            wrist: $("wrist").val(), //손, 손목
            chest: $("chest").val(), //가슴
            stomach: $("stomach").val(), //복부
            pelvis: $("pelvis").val(), //골반
            knee: $("knee").val(), //무릎
            ankle: $("ankle").val(), //발, 발목

            eye: $("eye").val(), //눈
            ear: $("ear").val(), //귀
            nose: $("nose").val(), //코
            mouth: $("mouth").val(), //입

            other: $("other").val() //기타
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