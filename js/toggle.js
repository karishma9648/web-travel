document.getElementById("backTopBtn").onclick = function () {

window.scrollTo({
top: 0,
behavior: "smooth"
});

};


const toggler = document.querySelector(".custom-toggler");

toggler.addEventListener("click", function(){

this.classList.toggle("active");

});