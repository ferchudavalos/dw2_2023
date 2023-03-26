console.log("03.js enlazado");
console.log("-ACTIVIDAD 3");
console.log("en el siguiente arreglo se encuentran los valores del 1 al 10");
num = [1,2,3,4,5,6,7,8,9,10];
resultado = [];
console.log(num);
for (var x = 0; x < num.length; x++) {
  var numeros = num[x];
  if (numeros % 2 === 0) {
    resultado.push(numeros);
  }
}
console.log("Y en este otro, se extraen los numeros pares del primer arreglo");
console.log(resultado);