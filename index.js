var count = 0;
var timer;
var golen = false;
window.onload = function() {
    const contianer = document.getElementsByClassName("swiper-wrapper")[0];
    const oneBox = document.getElementById("li_one");
    const fiveBox = document.getElementById("li_five");
    const circles = document.getElementsByClassName("point");
    contianer.insertBefore(fiveBox.cloneNode(true),oneBox);
    contianer.appendChild(oneBox.cloneNode(true));
    contianer.style.left = -100 + "vw";
    changeColor(count);//绑定按钮颜色

    showSwiper();
    function showSwiper() {
        timer = setInterval(() => {
                count ++;
                changeColor(count);
                if (count > 5) {
                    clearTimeout(timer);
                    count = 0;
                    golen = true;
                    contianer.style.transition = "0s";
                    contianer.style.transform =  "translate(" + -100 * count + "vw)";
                    showSwiper();
                } else {
                    contianer.style.transition = "ease-in-out 0.3s";
                    contianer.style.transform =  "translate(" + -100 * count + "vw)";
                }
            },4000);
     }

}

function showSwiper() {
    const contianer = document.getElementsByClassName("swiper-wrapper")[0];
    timer = setInterval(() => {
            count ++;
            changeColor(count);
            if (count > 5) {
                clearTimeout(timer);
                count = 0;
                golen = true;
                contianer.style.transition = "0s";
                contianer.style.transform =  "translate(" + -100 * count + "vw)";
                showSwiper();
            } else {
                contianer.style.transition = "ease-in-out 0.3s";
                contianer.style.transform =  "translate(" + -100 * count + "vw)";
            }
        },4000);
 }

function circle(num) {
    const contianer = document.getElementsByClassName("swiper-wrapper")[0];
    clearTimeout(timer);
    count = num;
    contianer.style.transition = "ease-in-out 0.3s";
    contianer.style.transform =  "translate(" + -100 * count + "vw)";
    changeColor(count);
    showSwiper();
}

function changeColor(count) {
    if (count > 4) count = 0; 
    const pointList = document.querySelectorAll(".point span");
    for (let i = 0;i < pointList.length;i ++) {
        const pointChild = pointList[i];
        if (i == count) {
            pointChild.className = "point-active";
        } else {
            pointChild.className = "";
        }
    }
}