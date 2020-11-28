"use strict";
let IP = location.host;

let login = () => {
    let join_patientName = document.getElementById("join_patientName").value;
    let join_patientTel = document.getElementById("join_patientTel").value;

    let form_data = {
        join_patientName: join_patientName,
        join_patientTel: join_patientTel
    };

    $.ajax({
        url: "http://" + IP + "/php/login.php",
        type: "POST",
        data: form_data,
        dataType: "text",
        success: function (response) {
            if (response.trim() == 'success') {
                sessionStorage.setItem('join_patientName', form_data.join_patientName);
                sessionStorage.setItem('join_patientTel', form_data.join_patientTel);
                $('#msg').html('<p>로그인성공!</p>')
            } else {
                $('#msg').html('<p>로그인실패!</p>');
            }
        },
        error: function () {
            $('#msg').html('<h2>error</h2>');
        }
    });

    return false;
}