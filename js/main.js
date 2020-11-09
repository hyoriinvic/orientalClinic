$(document).ready(function () {
    $('#submitInfo').click(function () {
        var action = $('#login').attr('action');
        var form_data = {
            join_patientName: $("#join_patientName").val(),
            join_patientPhone: $("#join_patientPhone").val()
        };
        $.ajax({
            type: 'POST',
            url: action,
            data: form_data,
            success: function (response) {
                if (response.trim() == 'success') {
                    sessionStorage.setItem('join_patientName', form_data.join_patientName);
                    $('#msg').html('<p>로그인성공!</p>')
                } else {
                    $('#msg').html('<p>로그인실패!</p>');
                }
            },
            error: function () {
                $('#msg').html('<h2>error</h2>');
            }
        });
    });
});




/* <script type="text/javascript">
    $(document).ready(function(){
        $('#enter').click(function () {
            var action = $('#Login').attr('action');
            var form_data = {
                join_patientName: $("#join_patientName").val(),
                join_patientTel: $("join_patientTel").val()
            };
            $.ajax({
                type: 'POST',
                url: action,
                data: form_data,
                success: function (response) {
                    if (response.trim() == 'success') {
                        sessionStorage.setItem('join_patientName', form_data.join_patientName);
                        $('#msg').html('<p>로그인성공!</p>')
                    } else {
                        $('#msg').html('<p>로그인실패!</p>');
                    }
                },
                error: function () {
                    $('#msg').html('<h2>error</h2>');
                }
            });
        });
    });
    </script> */