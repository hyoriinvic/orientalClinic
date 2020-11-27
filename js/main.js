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
            if (response) {
                if (typeof (Storage) !== "undefined") {
                    // Store
                    sessionStorage.setItem('join_patientName', form_data.join_patientName);
                    sessionStorage.setItem('join_patientTel', form_data.join_patientTel);
                    location.href = "./symptom1.html";
                }
            } else {
                alert("정보를 잘못입력하였습니다. 처음 방문하셨으면, 등록을 진행해주세요.");
            }
        }
    });

    return false;
}