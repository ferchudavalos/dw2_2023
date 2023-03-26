console.log("02.js enlazado");
console.log("- SEGUNDA ACTIVIDAD");
console.log("la palabra 'sometemos', es un palindromo?");
string= "sometemos";

function reverseString(str) {
  let arrStr = str.split("");

  return arrStr.reverse().join("");
}
x=reverseString(string);

if (x==string){
  console.log("La palabra "+string+" Si es un palndromo");
}else {
  console.log("La palabra "+string+" no es un palndromo");
  console.log("")
}

