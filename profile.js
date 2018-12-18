"use strict";

window.onload = pageLoad;

function pageLoad(){
	
	Sortable.create("music");
	$("lookup").onclick = showDefinition;
}
function showDefinition(){
	
	var searchTerm = $("title").value;
	
	new Ajax.Request( "profile_search.php", 
	{ 
		method: "get", 
		parameters: {parameter1:searchTerm},
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