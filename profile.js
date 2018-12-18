"use strict";

window.onload = pageLoad;

function pageLoad(){
	
	Sortable.create("music");
	$("lookup").onclick = showDefinition;
}
function showDefinition(){
	//retrieve value from the 'term' textbox
	var searchTerm = $("term").value;
					//= document.getElementById("term").value;
	//create a new Ajax request with URL pointing to urban.php, and query-string-parameter-name is 'parameter1' and query-string-parameter-value being the value that
	//was retrieved from the 'term' textbox above
	//on request success, you want the displayResult function to be invoked
	
	
	//urban.php?parameter1=css
	
	new Ajax.Request( "urban.php", 
	{ 
		method: "get", 
		parameters: {parameter1:searchTerm},
		onSuccess: displayResult,
		onFailure: displayFailureMessage
	} 
	);
}

		//http://urban.php?parmeter1=js

/*
the response from the server, after the request is processed completely is
displayed as the value of the div-element with the id 'result'
*/
//note: ajax MUST be in the parameter list of this function always
function displayResult(ajax){
	//document.getElemenyById("result").innerHTML = ajax.responseText;
	$("result").innerHTML = ajax.responseText;
	//eXtensible Markup Language
	//document.getElementById("result").value = 1234;
	
}

function displayFailureMessage(){
	alert('ajax request failed');
}