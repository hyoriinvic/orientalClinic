"use strict";
let IP = location.host;

window.onload = function () {
    let s1 = document.getElementById('high_blood_pressure');
    s1.addEventListener('change', function (e) { if (s1.checked) { s1.value = "1"; } else { s1.value = "0"; } });

    let s2 = document.getElementById('diabetes');
    s2.addEventListener('change', function (e) { if (s2.checked) { s2.value = "1"; } else { s2.value = "0"; } });

    let s3 = document.getElementById('hepatitis');
    s3.addEventListener('change', function (e) { if (s3.checked) { s3.value = "1"; } else { s3.value = "0"; } });

    let s4 = document.getElementById('allergy');
    s4.addEventListener('change', function (e) { if (s4.checked) { s4.value = "1"; } else { s4.value = "0"; } });

    let s5 = document.getElementById('surgery_history');
    s5.addEventListener('change', function (e) { if (s5.checked) { s5.value = "1"; } else { s5.value = "0"; } });

    let s6 = document.getElementById('medication');
    s6.addEventListener('change', function (e) { if (s6.checked) { s6.value = "1"; } else { s6.value = "0"; } });

    let s7 = document.getElementById('drinking');
    s7.addEventListener('change', function (e) { if (s7.checked) { s7.value = "1"; } else { s7.value = "0"; } });

    let s8 = document.getElementById('smoking');
    s8.addEventListener('change', function (e) { if (s8.checked) { s8.value = "1"; } else { s8.value = "0"; } });
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
                // location.href = "./symptom2.html";
            }
        }
    });

    return false;
}