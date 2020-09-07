"use strict"

function f1(){
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;

	var error = false;
	if(username == ""){
		document.getElementById('userMsg').innerHTML = "Username Can't left empty!";
		error = true;
	}else if(password == ""){
		document.getElementById('passMsg').innerHTML = "password Can't left empty!";
		error =true;
	}

	if(error){
		return false;
	}else{
		return true;
	}

}

var f2 = function(){
	var username = document.getElementById('username').value;
	if(username != ""){
		document.getElementById('userMsg').innerHTML = "";
		var password = document.getElementById('password').value;
	if(password != ""){
		document.getElementById('passMsg').innerHTML = "";
	}
}