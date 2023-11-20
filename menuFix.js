// фиксация меню при прокрутке

let a = 1;
let h = document.querySelector("h1");
let header = document.getElementById("header");
let menuBlock = document.querySelector(".header_top");
function testScroll(ev) {
    if (window.scrollY > 1 && a == 1) {
        if ($(window).width() < 460) {
            menuBlock.classList.add("header_top_fix");
            h.style.paddingTop = "58px";
            h.style.marginTop = "0px";
            header.style.marginTop = "0px";
            a++;
        }
        else {
            menuBlock.classList.add("header_top_fix");
            h.style.paddingTop = "78px";
            h.style.marginTop = "0px";
            header.style.marginTop = "0px";
            a++;

        }

    }
    else if (window.scrollY < 1 && a != 1) {
        a = 1;

        if ($(window).width() < 460) {
            h.style.marginTop = "0px";
            header.style.marginTop = "0px";
            h.style.paddingTop = "0px";
            menuBlock.classList.remove("header_top_fix");


        }
        else {
            h.style.marginTop = "10px";
            header.style.marginTop = "0px";
            h.style.paddingTop = "0px";
            menuBlock.classList.remove("header_top_fix");

        }

    }
}
window.onscroll = testScroll;
