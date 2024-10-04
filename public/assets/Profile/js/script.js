
// // Get Element From Html File
// let input = document.querySelector(".input");
// let submit = document.querySelector(".add");
// let tasksDiv = document.querySelector(".tasks");

// //Empty Array To Store Tasks
// let arrayOfTasks = [];

// //Check If Tasks In LocalStroge
// if (localStorage.getItem("tasks")) {
//      arrayOfTasks = JSON.parse(localStorage.getItem("tasks"));
// }

// // Get Data From Local Stroge Function
// getDataFromLocalStroge();
// //Add Task
// submit.onclick = function () {
//      if (input.value !== "") {
//           addTaskToArry(input.value); // Add Task To Array Of Tasks
//           input.value = ""; // Empty The Input
//      }
// };

// //Click On Task Element
// tasksDiv.addEventListener("click", (e) => {
//      //Delete Button
//      if (e.target.classList.contains("del")) {
//           //Remove Task From Local Stroge
//           deleteTaskWith(e.target.parentElement.getAttribute("data-id"));
//           //Remove Element From Page
//           e.target.parentElement.remove();
//      }
//      //Task Element
//      if (e.target.classList.contains("task")) {
//           //Toggle Completed From The Task
//           toggleStutesTaskWith(e.target.getAttribute("data-id"));
//           //Toggle Done Class
//           e.target.classList.toggle("done");
//      }
// });

// // function Add Tasks To Array
// function addTaskToArry(taskText) {
//      //Task Data
//      const task = {
//           id: Date.now(),
//           title: taskText,
//           completed: false,
//      };
//      //Push Task To Array Of Tasks
//      arrayOfTasks.push(task);
//      //console.log(arrayOfTasks);
//      //   Add Tasks To Page
//      addElementsToPageFrom(arrayOfTasks);
//      //Add Tasks To Local Stroge
//      addDataToLocalStrogeFrom(arrayOfTasks);
// }

// //Function Add Tasks To Page
// function addElementsToPageFrom(arrayOfTasks) {
//      //Empty TasksDiv
//      tasksDiv.innerHTML = "";
//      //Looping On ArrayOfTasks
//      arrayOfTasks.forEach((task) => {
//           //create Main Div
//           let div = document.createElement("div");
//           div.className = "task";
//           // Check Task Is Done
//           if (task.completed) {
//                div.className = "task done";
//           }
//           div.setAttribute("data-id", task.id);

//           // Get Current Date
//           const date = new Date();

//           //Date Formate
//           options = {
//                weekday: "long",
//                year: "numeric",
//                month: "short",
//                day: "numeric",
//           };
//           let dateString = date.toLocaleDateString("ar-EG", options);
//           let p = document.createElement("p");
//           p.className = "date";
//           //create p And Append Date
//           p.appendChild(document.createTextNode(`${dateString}`));
//           //Add P To Div
//           div.appendChild(p);
//           //Add Title Task To div
//           div.appendChild(document.createTextNode(task.title));
//           //create Delete Button
//           let span = document.createElement("span");
//           span.className = "del";
//           span.appendChild(document.createTextNode("حذف"));
//           //Add Span Button To Div
//           div.appendChild(span);
//           // div.setAttribute("data-aos", "zoom-in");
//           //Add Div To Task Container
//           tasksDiv.appendChild(div);
//      });
// }

// //Function Add Data To Local Stroge
// function addDataToLocalStrogeFrom(arrayOfTasks) {
//      window.localStorage.setItem("tasks", JSON.stringify(arrayOfTasks));
// }
// //Function Get Data From Local Stroge
// function getDataFromLocalStroge() {
//      let data = window.localStorage.getItem("tasks");
//      if (data) {
//           let tasks = JSON.parse(data);
//           addElementsToPageFrom(tasks);
//      }
// }
// // Function Delete Task With LocalStroge
// function deleteTaskWith(taskId) {
//      // for (let i=0; i<arrayOfTasks.length; i++ ){
//      //      console.log(`${arrayOfTasks[i].id} === ${taskId}`);
//      // }
//      arrayOfTasks = arrayOfTasks.filter((task) => task.id != taskId);
//      addDataToLocalStrogeFrom(arrayOfTasks);
// }

// //Function Toggle State
// function toggleStutesTaskWith(taskId) {
//      for (let i = 0; i < arrayOfTasks.length; i++) {
//           if (arrayOfTasks[i].id == taskId) {
//                arrayOfTasks[i].completed == false
//                     ? (arrayOfTasks[i].completed = true)
//                     : (arrayOfTasks[i].completed = false);
//           }
//      }
//      addDataToLocalStrogeFrom(arrayOfTasks);
// }




