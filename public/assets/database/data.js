// Append card In Tbody
let cardContainer = document.getElementById("card-container");
let ModelResive = document.getElementById("mymodal3");

//filter Data
let filterinput = document.getElementById("filter-input");

//Fetch Data From json Server
fetch("  http://localhost:3000/doctor")
     .then((res) => res.json())
     .then((json) => {
          json.map((data) => {
               console.log(data.name);
               cardContainer.append(
                    card_fun(
                         data.id,
                         data.name,
                         data.info,
                         data.title,
                         data.price,
                         data.profile,
                         data.email,
                         data.appoinment.satrday,
                         data.appoinment.wenthday
                    )
               );
          });
     });

;
//Add Event Lisiner
filterinput.addEventListener("keyup", filterDoctor);
//call back the Function
function filterDoctor() {
     let filterValue = filterinput.value;
     //console.log(filterValue);

     // let item = document.querySelectorAll(".card-container");

     // for (i = 0; i < item.length; i++) {
     //      let span = item[i].querySelectorAll(".info");

     //      if (span.innerHTML.toUpperCase.indexOf(filterValue) > -1) {
     //           item[i].style.display = "initial";
     //      } else {
     //           item[i].style.display = "none";
     //      }
     // }
}
// create td
function card_fun(
     id,
     name,
     info,
     title,
     price,
     profile,
     email,
     appoinment1,
     appoinment2
) {
     let card = document.createElement("div");
     card.setAttribute("data-aos", "zoom-in");
     card.innerHTML = ` 
       <div class="box  " >
                    <img class="img-doc" src="${profile}" alt="Card image cap">
                    <div class="info">
                        <span>دكتور /</span>
                        <span class="name"> ${name} </span>
                        <p class="information">${info}</p>
                        <p  class="title"> ${title} </p>
                        <p class="price">${price}</p>
                        <p class="email">${email}</p>
                    </div>
                    
                    <div class="appoinment d-flex align-center justify-content-between flex-column">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>السبت</td>
                                        <td></td>
                                        <td >الأربعاء</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>${appoinment1}<td>
                                        <td>${appoinment2}<td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary text-light m-auto" onclick=ResivePage() > احجز الأن</button>
                     </div>
            </div>
    `;
     return card ;
}

function ResivePage(){
     window.location.href = '../reserve.html';
}

