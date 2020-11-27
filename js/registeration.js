"use strict";
let IP = location.host;

let register = () => {

    let join_patientName = document.getElementById("join_patientName").value;
    let join_patientTel = document.getElementById("join_patientTel").value;
    let join_addressSearch = document.getElementById("join_addressSearch").value;
    let join_addressDetail = document.getElementById("join_addressDetail").value;
    let join_addressExtra = document.getElementById("join_addressExtra").value;
    let join_juminNumber = document.getElementById("join_juminNumber").value;
    let join_recommendPatient = document.getElementById("join_recommendPatient").value;

    let form_data = {
        join_patientName: join_patientName,
        join_patientTel: join_patientTel,
        join_addressSearch: join_addressSearch,
        join_addressDetail: join_addressDetail,
        join_addressExtra: join_addressExtra,
        join_juminNumber: join_juminNumber,
        join_recommendPatient: join_recommendPatient
    };

    $.ajax({
        url: "http://" + IP + "/php/join.php",
        type: "POST",
        data: form_data,
        dataType: "text",
        success: function (response) {
            if (response.error === true) {
                alert("회원가입 실패");
            } else {
                alert("회원가입 성공");
                location.href = "./symptom1.html";
            }
        }
    });

    return false;
}