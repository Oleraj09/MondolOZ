// alert("Fuck You Man!");
// console.log("Error!!");
// document.write("Hello World");
// console.log(self);
// console.log("Oleraj Hossin");
// console.log(318879);
// console.log(3188.79);
// console.log(true);
// var array=[true, 1, 5.3, false, "Hello World", null, undefined];
// console.log(array[5]);
// console.log(typeof(array));
// var arr={
//     "name" : "Oleraj",
//     "type" : "Human",
//     "IQ"   : "Less than 0",
//     "Class": "Normal"
// };
// // console.log(arr["name"]);
// console.log(arr.name + ' is ' + arr.type);
var num1 = document.getElementById('number1');
var num2 = document.getElementById('number2');
var display = document.getElementById('result');
var results;
function add(){
    results = Number(num1.value) + Number(num2.value);
    // display.value = results; //for input form
    display.innerHTML =results; //for html code blank space
    // console.log(results);
    // return results;
}
function substract(){
    results = Number(num1.value) - Number(num2.value);
    display.innerHTML =results; //for html code blank space
}
function mul(){
    results = Number(num1.value) * Number(num2.value);
    display.innerHTML =results; //for html code blank space
}
function div(){
    results = Number(num1.value) / Number(num2.value);
    display.innerHTML =results; //for html code blank space
}
