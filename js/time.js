setInterval(function()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","giangvien/classes/response.php",false);
	xmlhttp.send(null);
	document.getElementsByClassName(".response").innerHTML=xmlhttp.responseText;},1000);// JavaScript Document
	