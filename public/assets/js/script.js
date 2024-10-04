// Bars Toggle
let menue = document.querySelector("#menue-bars");
let navbar = document.querySelector(".navbar");

menue.onclick = () => {
     menue.classList.toggle("fa-times");
     navbar.classList.toggle("active");
};

// ***************************************************
// Add Active Class In Active Section
let section = document.querySelectorAll(".sec");
let navLinks = document.querySelectorAll("header .container .navbar a");

window.onscroll = () => {
     menue.classList.remove("fa-times");
     navbar.classList.remove("active");

     section.forEach((sec) => {
          let top = window.scrollY;
          let height = sec.offsetHeight;
          let offset = sec.offsetTop - 100;
          let id = sec.getAttribute("id");

          if (top >= offset && top < offset + height) {
               navLinks.forEach((links) => {
                    links.classList.remove("active");
                    document
                         .querySelector(
                              "header .container .navbar a[href*=" + id + "]"
                         )
                         .classList.add("active");
               });
          }
     });
};
//***************************************************************
document.querySelector("#span").onclick = function () {
     document.querySelector(".drop-down").classList.toggle("opend");
};

//***********************************************************
// Select Doctor
let data = {
     cairo: ["السادس من أكتوبر", "مدينة الشيخ زايد", "مصر الجديدة"],
     alex: ["محطة الرمل", "سموحة", "المنتزه"],
     dakahlia: ["المنصورة", "دكرنس", "شربين"],
};
document.querySelector(".govern").onchange = function () {
     let government = event.target.value;
     let output = ' <option value="">اختر المدينة</option>';
     if (government != "") {
          for (let city of data[government]) {
               output += " <option>" + city + " </option>";
          }
     }
     document.querySelector("#reseve #city").innerHTML = output;
};

//************************************************
//loader

function loader() {
     document.querySelector(".loader-container").classList.add("fade-out");
}
function fadeOut() {
     setInterval(loader, 3000);
}

window.onload = fadeOut;

//************************************************

(function () {
     "use strict";
     window.addEventListener(
          "load",
          function () {
               // Fetch all the forms we want to apply custom Bootstrap validation styles to
               var forms = document.getElementsByClassName("needs-validation");
               // Loop over them and prevent submission
               var validation = Array.prototype.filter.call(
                    forms,
                    function (form) {
                         form.addEventListener(
                              "submit",
                              function (event) {
                                   if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                   }
                                   form.classList.add("was-validated");
                              },
                              false
                         );
                    }
               );
          },
          false
     );
})();

//***********************************************************************
let myImage = document.getElementById("home");
let images = ["img/carousel-1.jpg", "img/carousel-2.jpg", "img/carousel-3.jpg"];
let i = 0;

function slidshow() {
     myImage.style.backgroundImage = `url(${images[i]})`;
     if (i == images.length - 1) {
          i = 0;
     } else {
          i++;
     }
     setTimeout(function () {
          slidshow();
     }, 3000);
}

slidshow();
