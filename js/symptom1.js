"use strict";
let IP = location.host;

window.onload = function () {
    // let checkbox = document.getElementById('high_blood_pressure');

    // checkbox.addEventListener('change', function (e) {
    //     if (checkbox.checked) {
    //         checkbox.value = "1";
    //     } else {
    //         checkbox.value = "0";
    //     }
    // });

    let btns = document.getElementsByClassName("btns");
    var checked = []; //check 여부를 저장할 배열 (1: checked, 0: not checked)

    btns.addEventListner('change', function (e))
    $.each(btns, function (index, item) {
        if ($(item).is(":checked")) {
            $(item).val() = "1";
            checked.push("1");
        } else {
            $(item).val() = "0";
            checked.push("0");
        }
    })
    console.log(checked); // 생성된 배열 확인
}

let saveSymptom1 = () => {

    // let patientTel = ;
    let high_blood_pressure = document.getElementById('high_blood_pressure').value;
    let diabetes = document.getElementById("diabetes").value;
    let hepatitis = document.getElementById("hepatitis").value;
    let allergy = document.getElementById("allergy").value;
    let surgery_history = document.getElementById("surgery_history").value;
    let medication = document.getElementById("medication").value;
    let drinking = document.getElementById("drinking").value;
    let smoking = document.getElementById("smoking").value;

    let form_data = {
        high_blood_pressure: high_blood_pressure,
        diabetes: diabetes,
        hepatitis: hepatitis,
        allergy: allergy,
        surgery_history: surgery_history,
        medication: medication,
        drinking: drinking,
        smoking: smoking
    };

    $.ajax({
        url: "http://" + IP + "/php/symptom1.php",
        type: "POST",
        data: form_data,
        dataType: "text",
        success: function (response) {
            if (response.error === true) {
                alert("정보 저장 실패");
            } else {
                alert("정보 저장 성공");
                location.href = "./symptom2.html";
            }
        }
    });

    return false;
}