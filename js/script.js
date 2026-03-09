/* Scroll navbar color */

window.addEventListener("scroll",function(){

let navbar=document.querySelector(".navbar");

if(window.scrollY>50){
navbar.classList.add("scrolled");
}
else{
navbar.classList.remove("scrolled");
}

})


/* Toggle icon change */

let toggler=document.querySelector(".navbar-toggler");
let icon=document.getElementById("menuIcon");

toggler.addEventListener("click",function(){

if(icon.classList.contains("bi-list")){
icon.classList.remove("bi-list");
icon.classList.add("bi-x");
}
else{
icon.classList.remove("bi-x");
icon.classList.add("bi-list");
}

})



const dots = document.querySelectorAll(".travelx-dot");
const sideText = document.getElementById("travelxSideText");

function changeTravelVideo(type) {
  const video = document.getElementById("travelHeroVideo");

  let videoSrc = "";

  switch(type) {
    case "india":
      videoSrc = "image/videos-compressed/360 dd(1).mp4";
      break;

    case "adventure":
      videoSrc = "image/videos-compressed/adventure harshit .mp4";
      break;

    case "nature":
      videoSrc = "image/videos-compressed/nature harshit  (1).mp4";
      break;

    case "wildlife":
      videoSrc = "image/videos-compressed/wildlife harshit (1).mp4";
      break;

    case "heritage":
      videoSrc = "image/videos-compressed/hertiage fbg.mp4";
      break;

    case "spiritual":
      videoSrc = "image/videos-compressed/spritual logo (1).mp4";
      break;
  }

  video.src = videoSrc;
  video.play();

  // active class
  document.querySelectorAll(".travel-category-bar li")
    .forEach(li => li.classList.remove("active"));

  event.target.classList.add("active");
}
function showTTInfo() {
  document.getElementById("ttInfoBox").style.display = "block";
}

function hideTTInfo() {
  document.getElementById("ttInfoBox").style.display = "none";
}
const bookBtn = document.getElementById("bookBtn");

const bookingModal = new bootstrap.Modal(document.getElementById("bookingModal"));

/* Click open */

bookBtn.addEventListener("click", function(e){
e.preventDefault();
bookingModal.show();
});

/* Hover open */

bookBtn.addEventListener("mouseenter", function(){
bookingModal.show();
});









