// program to check leap year

function esBisiesto(y) {
    return new Date(y, 1, 29).getDate() == 29;
}

var anio = 2000;
// Esta asignación con el operador ternario:
let mensaje = (esBisiesto(anio)) ? "Si es bisiesto" : "No es bisiesto";
// es equivalente a este if
/*
if (esBisiesto(anio))
    mensaje = "Si es bisiesto";
else
    mensaje = "NO es bisiesto";
*/
console.log (mensaje);