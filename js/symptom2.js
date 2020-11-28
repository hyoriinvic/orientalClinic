"use strict";
let IP = location.host;

window.onload = function () {
    let s1 = document.getElementById('neck');
    s1.addEventListener('change', function (e) { if (s1.checked) { s1.value = "1"; } else { s1.value = "0"; } });

    let s2 = document.getElementById('sholder');
    s2.addEventListener('change', function (e) { if (s2.checked) { s2.value = "1"; } else { s2.value = "0"; } });

    let s3 = document.getElementById('elbow');
    s3.addEventListener('change', function (e) { if (s3.checked) { s3.value = "1"; } else { s3.value = "0"; } });

    let s4 = document.getElementById('waist');
    s4.addEventListener('change', function (e) { if (s4.checked) { s4.value = "1"; } else { s4.value = "0"; } });

    let s5 = document.getElementById('wrist');
    s5.addEventListener('change', function (e) { if (s5.checked) { s5.value = "1"; } else { s5.value = "0"; } });

    let s6 = document.getElementById('chest');
    s6.addEventListener('change', function (e) { if (s6.checked) { s6.value = "1"; } else { s6.value = "0"; } });

    let s7 = document.getElementById('stomach');
    s7.addEventListener('change', function (e) { if (s7.checked) { s7.value = "1"; } else { s7.value = "0"; } });

    let s8 = document.getElementById('pelvis');
    s8.addEventListener('change', function (e) { if (s8.checked) { s8.value = "1"; } else { s8.value = "0"; } });

    let s9 = document.getElementById('knee');
    s9.addEventListener('change', function (e) { if (s9.checked) { s9.value = "1"; } else { s9.value = "0"; } });

    let s10 = document.getElementById('ankle');
    s10.addEventListener('change', function (e) { if (s10.checked) { s10.value = "1"; } else { s10.value = "0"; } });

    let s11 = document.getElementById('eye');
    s11.addEventListener('change', function (e) { if (s11.checked) { s11.value = "1"; } else { s11.value = "0"; } });

    let s12 = document.getElementById('nose');
    s12.addEventListener('change', function (e) { if (s12.checked) { s12.value = "1"; } else { s12.value = "0"; } });

    let s13 = document.getElementById('mouth');
    s13.addEventListener('change', function (e) { if (s13.checked) { s13.value = "1"; } else { s13.value = "0"; } });

    let s14 = document.getElementById('other');
    s14.addEventListener('change', function (e) { if (s14.checked) { s14.value = "1"; } else { s14.value = "0"; } });


}

let saveSymptom2 = () => {

    let join_patientName = sessionStorage.getItem("join_patientName");
    let join_patientTel = sessionStorage.getItem("join_patientTel");

    let neck = document.getElementById('neck').value;
    let sholder = document.getElementById("sholder").value;
    let elbow = document.getElementById("elbow").value;
    let waist = document.getElementById("waist").value;
    let wrist = document.getElementById("wrist").value;
    let chest = document.getElementById("chest").value;
    let stomach = document.getElementById("stomach").value;
    let pelvis = document.getElementById("pelvis").value;
    let knee = document.getElementById("knee").value;
    let ankle = document.getElementById("ankle").value;
    let eye = document.getElementById("eye").value;
    let nose = document.getElementById("nose").value;
    let mouth = document.getElementById("mouth").value;
    let other = document.getElementById("other").value;

    let form_data = {
        join_patientName: join_patientName,
        join_patientTel: join_patientTel,
        neck: neck,
        sholder: sholder,
        elbow: elbow,
        waist: waist,
        wrist: wrist,
        chest: chest,
        stomach: stomach,
        pelvis: pelvis,
        knee: knee,
        ankle: ankle,
        eye: eye,
        nose: nose,
        mouth: mouth,
        other: other
    };

    console.log(form_data);

    $.ajax({
        url: "http://" + IP + "/php/symptom2.php",
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