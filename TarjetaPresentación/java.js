window.addEventListener("load", function() {
    document.body.classList.add("loaded");
    document.querySelector('.basico').classList.add("loaded");
});

function funClick1(){
    if (document.getElementById("parr1").innerText === "Septimo semestre universidad EAN") {
        document.getElementById("parr1").innerText = "Me gustaria enfocarme en el cloud computing";
    } else {
        document.getElementById("parr1").innerText = "Septimo semestre universidad EAN";
    }
};