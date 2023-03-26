console.log("04.js enlazado");
console.log("-ACTIVIDAD 4");
console.log("En el siguiente arreglo denominado 'frutas' tenemos los siguiente elementos:");
frutas = ['naranja', 'pera', 'manzana', 'fresa'];
console.log(frutas);
cambio = frutas.indexOf('manzana');

frutas[cambio] = 'limon';
console.log("Y en este otro arreglo reemplazamos el elemento 'manzana' por otro llamado 'limon'")

console.log(frutas);