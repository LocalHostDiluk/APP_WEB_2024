const text = require("body-parser/lib/types/text");

function operaciones(){
    let n1, operacion, resultado;

    n1 = parseInt(document.getElementById("num1").value);
    operacion = document.getElementById("opcion").value;
    usa = document.getElementById("usai");
    eu = document.getElementById("euri");
    mxn = document.getElementById("mxni");

    if (isNumber(n1)){
        switch(operacion){
                case "usd":
                    resultado = n1 / 20.03 ;
                    src = "usa.jpg";
                    break;
                case "mxn":
                    resultado = n1 * 20.03;
                    src = "mexico.webp";
                    break;
                case "eu":
                    resultado = n1 / 21.67;
                    src = "europe.webp";
                    break;
                case "mxn":
                    resultado = n1 * 21.67;
                    src = "mexico.webp";
                    break;
        }
        escribir = document.getElementById("resultado");
        escribir.innerHTML = ` ${n1} = ${resultado} ${operacion} <br> <img src="${src}" width="100" height="100">`;
    }else{
        respuesta = document.getElementById("resultado").innerHTML = `<h2>Ingrese un número válido</h2>`
        alert("Ingrese un número válido");
    }

}

function isNumber(n){
    return !isNaN(parseFloat(n)) && isFinite(n);
}
