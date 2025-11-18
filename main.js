var ready = (callback) => {
     if (document.readyState != "loading") callback();
     else document.addEventListener("DOMContentLoaded", callback);
}
ready(() => {
     document.querySelector(".header").style.height = window.innerHeight + "px";
})


function ValidateEmail(inputText) {
     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
     const element = document.getElementById("email-input");
     if (inputText.value.match(mailformat)) {
          element.style.backgroundColor = "white";
          return true;
     }
     else {
          element.style.backgroundColor = "red";

          return false;
     }
}

function ValidatePasswordConfirm() {
     var counterA = 0;
     var pw = document.getElementById("password-input").value;
     var pw_Conf = document.getElementById("password-Conf").value;
     const element = document.getElementById("password-Conf");
     if (pw == pw_Conf) {
          element.style.backgroundColor = "white";
     }
     else
          element.style.backgroundColor = "red";

}
function verifyPassword() {
     var counterA = 0, countera = 0, counterNumber = 0;
     var upperCaseLetters = /[A-Z]/g, lowerCaseLetters = /[a-z]/g, numbers = /[0-9]/g;

     var pw = document.getElementById("password-input").value;
     const element = document.getElementById("password-input");
     //check empty password field


     if (pw.match(lowerCaseLetters))
          countera += 1;
     if (pw.match(upperCaseLetters))
          counterA += 1;
     if (pw.match(numbers))
          counterNumber += 1;


     if (countera == 0 || counterNumber == 0 || counterA == 0 || pw.length < 8) {
          element.style.backgroundColor = "red";
     }
     else {
          element.style.backgroundColor = "white";
     }
}


function Emptyvalidation(inputtxt) {
     if (inputtxt.value.length == 0) {
          document.inputtxt.style.background = "Yellow";
     }
     else {
          document.inputtxt.style.background = "White";
     }
     return error;
}
