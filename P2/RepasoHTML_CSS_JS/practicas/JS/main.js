// Este es un comentario

/* Esto es un comentario
de varias
lineas */

// Alerta
// alert("Soy una alerta")

// Variables

var nombre = "Juan";
let nombre2 = "Pedro";
let edad = 30;
let logica = true;
let estatura = 1.75;

// Mostrar en pantalla
// let concatenacion = "La persona: " + nombre + " tiene la edad de: " + edad + " años";
// document.write("<h1>"+concatenacion+"</h1><br>");
// document.write("La persona: " + nombre + " tiene la edad de: " + edad + " años");

// Mostrar en pantalla
let datos = document.getElementById("información");
datos.innerHTML= `
<br>
<hr>
<h1> la persona: ${nombre} tiene la edad de: ${edad} años</h1>
<hr>
<br>
`;

let datos2 = document.getElementById("info2");
datos2.innerHTML= `
<br>
<hr>
<h2>Este es otro contenido</h2>
<hr>
`;

// Condicionales

if (estatura >= 1.90) {
    datos.innerHTML +=`<hr> <h3>Es una persona alta</h3> <hr>`;
} else {
    datos.innerHTML +=`<hr> <h3>Es una persona promedio</h3> <hr>`;
}

// Ciclos

for (let i = 1; i <= 5; i++){
    datos.innerHTML +=`<hr><h4>For. El número es: ${i}</h4>`;
}

let a = 1;
while (a <= 5){
    datos.innerHTML +=`<hr><h4>While: El número es: ${a}</h4>`;
    a++;
}

let b = 1;
do
{
    datos.innerHTML +=`<hr><h4>Do While: El número es: ${b}</h4>`;
    b++;
}
while (b <= 5);

// Funciones

// 1er caso (sin retorno sin parametros)
function suma(){
    let n1 = 2;
    let n2 = 4;
    suma = n1 + n2;
    console.log("La suma es: "+suma);
    datos.innerHTML +=`<hr><h3>La suma es: ${suma}</h3>`;
}

suma();

// 2do caso (con retorno sin parametros)
function suma2(){
    let n1 = 2;
    let n2 = 4;
    suma = n1 + n2;
    return suma;
}

let sum = suma2();
datos.innerHTML +=`<hr><h3>Suma 2. La suma es: ${sum}</h3>`; // igual que la de abajo
datos.innerHTML +=`<hr><h3>Suma 2. La suma es: ${suma2()}</h3>`; // igual que la de arriba (ahorra variables)

// 3er caso (sin retorno con parametros)
function suma3(n1, n2){
    suma = n1 + n2;
    console.log("La suma es: "+suma);
    datos.innerHTML +=`<hr><h3>La suma es: ${suma}</h3>`;
}

suma3(3, 5);

// 4to caso (con retorno con parametros)
function suma4(n1, n2){
    suma = n1 + n2;
    return suma;
}

sum = suma4(3, 5);
datos.innerHTML +=`<hr><h3>Suma 4. La suma es: ${sum}</h3>`; // igual que la de abajo
datos.innerHTML +=`<hr><h3>Suma 4. La suma es: ${suma4(3, 5)}</h3>`; // igual que la de arriba (ahorra variables)

// Funciones flecha =>

// ejemplo suma normal
function suma5(a, b){
    return a + b;
}
suma5(3, 5);
datos.innerHTML +=`<hr><h3>Suma 5. La suma es: ${suma5(3, 5)}</h3>`; 

// ejemplo suma flecha
const suma6 = (a, b) => a + b;
datos.innerHTML +=`<hr><h3>Suma Flecha. La suma es: ${suma6(3, 5)}</h3>`;

// Arreglos

let animales = [];
animales[0] = "Perico";
animales[1] = "León";
animales[2] = "Perro";

datos.innerHTML +=`<hr><h3>El rey de la selva es: ${animales[1]}</h3>`;

for (let i = 0; i < animales.length; i++){
    datos.innerHTML +=`<hr><h3>El animal es: ${animales[i]}</h3>`;
}

animales.forEach(element => {
    datos.innerHTML +=`<hr><h3>El animal es: ${element}</h3>`;
});