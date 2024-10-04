function showDiv(prefix, chooser) {
     for (var i = 0; i < chooser.options.length; i++) {
          var div = document.getElementById(prefix + chooser.options[i].value);
          div.style.display = "none";
     }

     var selectedOption = chooser.options[chooser.selectedIndex].value;

     if (selectedOption == "0") {
          displayDiv(prefix, "0");
     }
     if (selectedOption == "1") {
          displayDiv(prefix, "1");
     }
     if (selectedOption == "2") {
          displayDiv(prefix, "2");
     }
     if (selectedOption == "3") {
          displayDiv(prefix, "3");
     }
}

function displayDiv(prefix, suffix) {
     var div = document.getElementById(prefix + suffix);
     div.style.display = "block";
}

let input_PassWord = document.getElementById("userpass");
let icon1 = document.getElementById("eye1");
icon1.onclick = function () {
     if (input_PassWord.type == "password") {
          input_PassWord.type = "text";
          icon1.className = "fa-regular fa-eye-slash show_pass";
     } else {
          input_PassWord.type = "password";
          icon1.className = "fa-regular fa-eye show_pass";
     }
};

let input_PassWord2 = document.getElementById("userpass2");
let icon2 = document.getElementById("eye2");
icon2.onclick = function () {
     if (input_PassWord2.type == "password") {
          input_PassWord2.type = "text";
          icon2.className = "fa-regular fa-eye-slash show_pass";
     } else {
          input_PassWord2.type = "password";
          icon2.className = "fa-regular fa-eye show_pass";
     }
};
let input_PassWord3 = document.getElementById("userpass3");
let icon3 = document.getElementById("eye3");
icon3.onclick = function () {
     if (input_PassWord3.type == "password") {
          input_PassWord3.type = "text";
          icon3.className = "fa-regular fa-eye-slash show_pass";
     } else {
          input_PassWord3.type = "password";
          icon3.className = "fa-regular fa-eye show_pass";
     }
};
