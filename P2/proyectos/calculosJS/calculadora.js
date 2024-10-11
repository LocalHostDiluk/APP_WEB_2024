const text = require("body-parser/lib/types/text");

function operaciones(){
    let n1, n2, operacion, resultado;

    n1 = parseInt(document.getElementById("num1").value);
    n2 = parseInt(document.getElementById("num2").value);
    operacion = document.getElementById("opcion").value;

    if (isNumber(n1) && isNumber(n2)){
        switch(operacion){
            case "+":
                resultado = n1 + n2;
                break;
                case "-":
                resultado = n1 - n2;
                break;
                case "*":
                    resultado = n1 * n2;
                break;
            case "/":
                resultado = n1 / n2;
                break;
        }
        escribir = document.getElementById("resultado");
        escribir.innerHTML = `<h3> ${n1} ${operacion} ${n2} = ${resultado} </h3>`;
    }else{
        alert("Ingrese un número válido");
    }

}

function isNumber(n){
    return !isNaN(parseFloat(n)) && isFinite(n);
}
