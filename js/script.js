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
