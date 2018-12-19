function cookieCreation(expiration){
	
		
	window.document.cookie = "Backgroundcolor=white;expires="+expiration.toGMTString();
	window.document.cookie = "Textcolor=black;expires="+expiration.toGMTString();
	window.document.cookie = "Fonttype=serif;expires="+expiration.toGMTString();
} /*Couldn't get these implemnted in time*/

window.onload = pageLoad;
var check = 0;

function pageLoad(){
		$("submitButton").onclick = showAvailable;
		$("changeButton").onclick = validate;
		
}

function validate(){
		var profile = $("fileupload").value;
		var pattern1 = /^Profile1.png$/;
		var pattern2 = /^Profile2.png$/;
		var pattern3 = /^Profile3.png$/;
		var result1 = pattern1.test(profile);
		var result2 = pattern2.test(profile);
		var result3 = pattern3.test(profile);
		alert(result1);
		alert(result2);
		alert(result3);
		
	
	
		if ((!result1 && !profile == "" ) && (!result2 && !profile == "") && (!result3 && !profile == "")){
				alert("This is not a valid profile picture");
				
		}
		
		if (result1 || result2 || result3){
			check = 2;
			process();
		}
		if (profile == ""){
				process();
		}
}
function using_switch_off(incoming){
	new Effect.SwitchOff(incoming);
}

function using_appear(incoming){
		new Effect.Appear(incoming);
}

function showAvailable(){
	new Ajax.Request("picinfo.php",
	{
		method: "get",
		onSuccess: displayResult,
		onFailure: displayFailureMessage
	}
	);
		
}

function displayResult(ajax){
	alert("success");
	$("show").innerHTML = ajax.responseText;
}
function displayFailureMessage(){
		alert('ajax request failed');
}


function process(){
		var d = new Date();
		d.setTime(d.getTime() + (365*1000*60*60*24))
		
		
		cookieCreation(d);
		var bgcolor=document.getElementById("color").value;
		document.body.style.backgroundColor=bgcolor;
		
		var txtcolor=document.getElementById("color2").value;
		document.body.style.color=txtcolor;
		
		if(check == 2){
		var profilepic=document.getElementById("fileupload").value;
		document.getElementById("userImg").src="images/" + profilepic;
		}
		
		
		var txtstyle=document.getElementById("fnt_type").value;
		document.body.style.fontFamily=txtstyle;
		
		if($("backimg").value != ""){
		var backgroundimg=document.getElementById("backimg").value;
		var anipic="url('images/" + backgroundimg + ".PNG')";
		document.body.style.backgroundImage=anipic;
		document.body.style.backgroundSize="25% 25%";
		}
		
		
		window.document.cookie = "Backgroundcolor="+bgcolor+";expires="+d.toGMTString();
		window.document.cookie = "Textcolor="+txtcolor+";expires="+d.toGMTString();
		window.document.cookie = "Profilepic="+profilepic+";expires="+d.toGMTString();
		window.document.cookie = "Fonttype="+txtstyle+";expires="+d.toGMTString();
		window.document.cookie = "Backgrondimg="+anipic+";expires="+d.toGMTString();	
}
	
