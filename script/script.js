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
	   if (localStorage.getItem('adminka') == ('0')) {
	   	  document.getElementById('conteiner').style.display = "";
	   	  localStorage.setItem('adminka', '1'); 
	   }
	   	else {

	   		document.getElementById('conteiner').style.display = "none";
	   	  localStorage.setItem('adminka', '0'); 
	   	}
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
	var vhod = "1";

	$.ajax({ 
		type: "GET", 
		url: "adminka.php",
		data: {login: adm_login.value, password: adm_pass.value}, 
		success: function(data) { 	
		if (data == "да") {location.href = "adminka.php?adm_log="+adm_login.value+"&adm_pas="+adm_pass.value+"&vhod="+vhod} 
		if (data == "не") {alert('ТЫ НЕ АДМИН, ТЫ ВРУН')} 

		
	} 
}); 


} 

function addavto1(){
	console.log ("HUYE");
	var add_model = document.getElementById("modeladd"); 
	var add_nomer = document.getElementById("nomeradd");
	var add_strahovka = document.getElementById("strahovkaadd"); 


	$.ajax({ 
		type: "GET", 
		url: "script/adminred.php",
		data: {model: add_model.value, nomer: add_nomer.value, strahovka: add_strahovka.value, func: 'add'}, 
		success: function(data) { 	
		if (data == "dobav") {alert('Добавлена новая запись')} 
		if (data == "не") {alert('пошел нахуй с таблицы')} 
		
	} 
}); 


}