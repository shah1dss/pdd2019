function bd() {
	location.href = "show_bd.php";
}

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2000);
 
function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
}
function adm_enter() {
	window.open("adminka.php");
}

function pdd() {
	window.open("https://xn--b1aew.xn--p1ai/folder/1386296");
}

function proverka() { 
var nomer = document.getElementById("nomer"); 
var region = document.getElementById("region");
var strahovka = document.getElementById("strahovka"); 



if (nomer.value == "" || region.value == "" || strahovka.value == "" ) {
	alert('Вы что-то не ввели!!!!!!!');
	return;
}



$.ajax({ 
type: "GET", 
url: "script/proverka.php", 
data: { nomer: nomer.value+region.value, strahovka: strahovka.value }, 
success: function(data) { 	
if (data == "да") {location.href = "lc.php?kod_avto="+nomer.value+region.value+"&strahovka="+strahovka.value} 
if (data == "не") {alert('Таких данных в базе нет')} 
} 
}); 
} 


function adm_login(){

	var adm_login = document.getElementById("adm_login"); 
	var adm_pass = document.getElementById("adm_pass");

// 	$.ajax({ 
// 		type: "GET", 
// 		url: "script/adminka.php", 
// 		data: {login: adm_login.value, password: adm_pass.value} 
// 		success: function(data) { 	


		
// 	} 
// }); 

	window.open("adminka.php?login="+adm_login.value+"&password="+adm_pass.value);

} 