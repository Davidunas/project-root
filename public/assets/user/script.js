const slidepage = document.querySelector(".slidepage");
const firtnextBtn = document.querySelector(".nextBtn");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const finishBtn = document.querySelector(".finish");
const bullet = document.querySelectorAll(".step .bullet");
let max = 3;
let current = 1;


firtnextBtn.addEventListener("click", function(){
    slidepage.style.marginLeft = "-25%";
    bullet[current -1].classList.add("active");
    current += 1;
});
nextBtnSec.addEventListener("click", function(){
    slidepage.style.marginLeft = "-50%";
    bullet[current -1].classList.add("active");
    current += 1;
});
finishBtn.addEventListener("click", function(){
    bullet[current -1].classList.add("active");
    current += 1;
    // setTimeout(function(){
    // alert("you're successfully complete account setup");
    // },800);
});

prevBtnSec.addEventListener("click", function(){
    slidepage.style.marginLeft = "0%";
    bullet[current -2].classList.remove("active");
    current -= 1;
});