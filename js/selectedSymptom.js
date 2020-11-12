/*  증상 선택 버튼의 구조: 
<div>
  <input type="checkbox" class="btns" id="something">
  <label class="btn1" for="something">증상명</label>
</div>

해당 구조에서 input tag의 property 를 기준으로 함수 작성
class = "btns"
*/

function isChecked() {
  let btns = document.getElementsByClassName("btns");
  // console.log(btns); // 클래스명이 btn1인 elements 배열

  // var checked = []; //check 여부를 저장할 배열 (1: checked, 0: not checked)

  $.each(btns, function (index, item) {
    if ($(item).is(":checked")) {
      $(item).val() = "1";
      // checked.push("1");
    } else {
      $(item).val() = "0";
      // checked.push("0");
    }
  })
  // console.log(checked); // 생성된 배열 확인
  // return checked;
}

// 아래의 함수는 사용하지 않습니다
// _________________________________________________________________________________________________ //

/*
function checkedButton() {
  let btns = document.getElementsByClassName("btns");
  console.log(btns); // 클래스명이 btn1인 elements 배열

  var checkedBtns = []; //check된 값을 넣을 빈 배열

  $.each(btns, function (index, item) {
    if ($(item).is(":checked")) {
      var arr = [index, $(item).attr("id")];
      checkedBtns.push(arr);
    }
  })
  console.log(checkedBtns); // 생성된 2차원 배열 값 확인
  return checkedBtns;
}

function checkedButtonIndex() {
  let btns = document.getElementsByClassName("btns");
  var checkedBtnsIndex = []; //check된 값의 index를 넣을 빈 배열

  $.each(btns, function (index, item) {
    if ($(item).is(":checked")) {
      checkedBtnsIndex.push(index);
    }
  })
  console.log(checkedBtnsIndex); // 저장된 index 확인
  return checkedBtnsIndex;
}
*/


// function checkedButton() {
//   let btns = document.getElementsByClassName("btns");
//   console.log(btns); // 클래스명이 btn1인 elements 배열
//   console.log(btns.length); // 배열의 길이 확인

//   // elements의 개수만큼 2차원 배열생성
//   // 해당 배열에 체크된 값의 인덱스와 id를 저장할 예정 

//   var checkedBtns = []; //check된 값을 넣을 빈 배열
//   console.log(checkedBtns); // 생성된 배열 확인

//   $.each(btns, function (index, item) {
//     console.log(index); // 인덱스 확인
//     console.log(item); // 각 버튼 (체크박스로 만들어진)
//     console.log($(item).attr("id")); // 버튼의 label for 태그
//     console.log($(item).is(":checked")); // check 여부 확인

//     // check 된 것에 대해서, 인덱스와 id(sympton 명)을 arr에 저장
//     // 2차원 배열로 저장
//     if ($(item).is(":checked")) {
//       var arr = [index, $(item).attr("id")];
//       checkedBtns.push(arr);
//     }
//   })

//   console.log(checkedBtns); // 생성된 2차원 배열 값 확인

//   return checkedBtns;
// }