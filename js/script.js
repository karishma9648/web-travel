window.addEventListener("scroll", function () {
  let nav = document.getElementById("navbar");

  if (window.scrollY > 50) {
    nav.classList.add("scrolled");
  } else {
    nav.classList.remove("scrolled");
  }
});

const dots = document.querySelectorAll(".travelx-dot");
const sideText = document.getElementById("travelxSideText");

// dots.forEach(dot => {

  
//   dot.addEventListener("mouseenter", () => {
//     sideText.innerText = dot.getAttribute("data-text");
//     sideText.classList.add("show");
//   });

//   dot.addEventListener("mouseleave", () => {
//     sideText.classList.remove("show");
//   });

 
//   dot.addEventListener("click", () => {
//     sideText.innerText = dot.getAttribute("data-text");
//     sideText.classList.add("show");

//     setTimeout(() => {
//       sideText.classList.remove("show");
//     }, 2000);
//   });

// });

const heroData = [
  {
    video: "image/videos compressed/360 dd (1).mp4",
    title: "India 360",
    text: "Explore the beauty of India"
  },
  {
    video: "image/videos compressed/adventure harshit .mp4",
    title: "Adventure",
    text: "Feel the thrill of mountains & rivers"
  },
  {
    video: "image/videos compressed/nature harshit  (1).mp4",
    title: "Nature",
    text: "Peaceful landscapes and greenery"
  },
  {
  video: "image/videos compressed/wildlife harshit (1).mp4",
    title: "Wildlife",
    text: "Explore forests and wild animals"
  },
  {
    video: "image/videos compressed/hertiage fbg.mp4",
    title: "Heritage",
    text: "Explore the rich cultural heritage of India"
  },
  {
    video: "image/videos compressed/spritual logo (1).mp4",
    title: "Spiritual",
    text: "Discover temples and divine places"
  }
];

function changeHero(index){

  const video = document.getElementById("travelHeroVideo");
  const source = video.querySelector("source");

  source.src = heroData[index].video;
  video.load();

  document.getElementById("travelHeroTitle").innerText = heroData[index].title;
  document.getElementById("travelHeroText").innerText = heroData[index].text;

  // active class
  document.querySelectorAll(".travel-hero-categories span").forEach(el => el.classList.remove("active"));
  document.querySelectorAll(".travel-hero-categories span")[index].classList.add("active");
}
document.getElementById("backTopBtn").onclick = function () {

window.scrollTo({
top: 0,
behavior: "smooth"
});

};


