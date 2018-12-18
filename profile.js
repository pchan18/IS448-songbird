"use strict";

window.onload = pageLoad;

function pageLoad(){
	$("update").onclick = updateBio;
	Sortable.create("music");
	$("lookup").onclick = titleSearch;
	
}

function updateBio(){
	var bio = $("bioText").value;
	
	new Ajax.Request( "profile_bio.php", 
	{ 
		method: "get", 
		parameters: {bio:bio},
		onSuccess: displayBio,
		onFailure: displayFailureMessage
	} 
	);
}

function displayBio(ajax){
	$("bio").innerHTML = ajax.responseText;
}

function titleSearch(){
	
	var title = $("title").value;
	
	new Ajax.Request( "profile_search.php", 
	{ 
		method: "get", 
		parameters: {title:title},
		onSuccess: displayResult,
		onFailure: displayFailureMessage
	} 
	);
}

function displayResult(ajax){
	$("result").innerHTML = ajax.responseText;
}

function displayFailureMessage(){
	alert('ajax request failed');
}