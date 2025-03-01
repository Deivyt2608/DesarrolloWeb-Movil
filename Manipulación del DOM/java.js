function fun1(){
    if (document.getElementById("parr1").innerText === "Hola, este es el texto original") {
        document.getElementById("parr1").innerText = "Este es el nuevo texto";
    } else {
        document.getElementById("parr1").innerText = "Hola este es el texto original";
    }
}