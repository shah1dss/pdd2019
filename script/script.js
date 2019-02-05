function bd() {
	alert("privet");
}



function pdd() {
	window.open("https://xn--b1aew.xn--p1ai/folder/1386296");
}

function proverka() { 
var nomer = document.getElementById("nomer"); 
var strahovka = document.getElementById("strahovka"); 
// if (strahovka.value.length<25 ){ 
// nomer.style.border="1px solid #A4A4A4" 
// strahovka.style.border="2px solid red" 
// alert("Вы ввели неправильную страховку"); 
// } else{ 
// if(nomer.value.length<9) { 
// strahovka.style.border="1px solid #A4A4A4" 
// nomer.style.border="2px solid red" 
// alert(""); } else { 
// nomer.style.border="1px solid #A4A4A4" 

$.ajax({ 
type: "GET", 
url: "script/proverka.php", 
data: { nomer: nomer.value, strahovka: strahovka.value }, 
success: function(data) { 
if (data == "да") {alert('Вы успешно зашли в личный кабинет')} 
if (data == "не") {alert('Таких данных в базе нет')} 
} 
}); 
} 

