let messagePage = document.getElementById("messagePage");

let input = document.getElementById("input");

let SendBtn = (document.getElementById("send").onclick = function () {
     if (input.value !== "") {
          //Create Div To Append Message And Time
          let outgoingChatMessage = document.createElement("div");
          outgoingChatMessage.classList.add("outgoing-chat-message");

          //Create p To Append Messsage
          let message = document.createElement("p");
          message.innerHTML = input.value;

          //Create Span To Append Time Of Message
          var today = new Date();
          let options = { timeStyle: "short", hour12: true };
          var time = today.toLocaleTimeString("en-US", options);
          let Time = document.createElement("span");
          Time.classList.add("time");
          Time.innerHTML = time;

          //Add P And Span To outgoingChatMessage
          outgoingChatMessage.appendChild(message);
          outgoingChatMessage.appendChild(Time);

          //Create Div To Apeend Image
          let ImgContainer = document.createElement("div");
          ImgContainer.classList.add("outgoing-chats-img");

          //Create Image
          let Image = document.createElement("img");
          Image.setAttribute("src", "img/team-2.jpg");

          //Image Container Append Img
          ImgContainer.appendChild(Image);

          //Create Div Message OutGoging
          let MessageGoing = document.createElement("div");
          MessageGoing.classList.add("outgoing-chats");
          //Append outgoingChatMessage And ImgContainer In MessageGoing
          MessageGoing.appendChild(outgoingChatMessage);
          MessageGoing.appendChild(ImgContainer);
          //Append MessageGoing To Message Page
          messagePage.appendChild(MessageGoing);
          //Set Input Value Null
          input.value = "";
     }
});

//Toggle Spin On Icon
document.querySelector(".toggle-message .message").onclick = function () {
     //Toggle Class fa-spin For Rotation On Self
     this.classList.toggle("fa-bounce");
     //  Toggle Class Open On Main Setting-box
     document.querySelector(".message-box").classList.toggle("open");
     //Toggle Naication
     document.querySelector(".navication").classList.toggle("hide");
};

//--------------------Read Message----------------
document.getElementById("messBtn").onclick = function () {
     //Toggle Class fa-spin For Rotation On Self
     document
          .querySelector(".toggle-message .message")
          .classList.toggle("fa-bounce");
     //  Toggle Class Open On Main Setting-box
     document.querySelector(".message-box").classList.toggle("open");
     //Toggle Naication
     document.querySelector(".navication").classList.toggle("hide");
};

document.getElementById("messBtn1").onclick = function () {
     //Toggle Class fa-spin For Rotation On Self
     document
          .querySelector(".toggle-message .message")
          .classList.toggle("fa-bounce");
     //  Toggle Class Open On Main Setting-box
     document.querySelector(".message-box").classList.toggle("open");
     //Toggle Naication
     document.querySelector(".navication").classList.toggle("hide");
};

document.getElementById("messBtn2").onclick = function () {
     //Toggle Class fa-spin For Rotation On Self
     document
          .querySelector(".toggle-message .message")
          .classList.toggle("fa-bounce");
     //  Toggle Class Open On Main Setting-box
     document.querySelector(".message-box").classList.toggle("open");
     //Toggle Naication
     document.querySelector(".navication").classList.toggle("hide");
};
