var finalx = 500, finaly=300;

window.onload=initText;

function initText(){
    //call afterInterval function every 1 millisecond
	setInterval("afterInterval()",1);
}

function afterInterval(){
	dom = document.getElementById('theText');
	
   /* Get the current position of the text */
	var x = dom.style.left; //alert(x);
	var y = dom.style.top;
	/* 
	x is a string value like 100px, we need to strip the 'px' out first 
	and get the numeric value of the left and top values.
	To do this, convert the string values of left and top to 
    numbers by stripping off the units of 'px'*/

	x = parseInt(x);
	y = parseInt(y);


	//Another way to do this stripping is to use the match function
	//x = x.match(/\d+/);
	//y = y.match(/\d+/);

	//if text is not in final position, then increment x by 1 and increment y by 1
	//thus moving it closer to the finalx and finaly positions	
	if ((x != finalx) || (y != finaly)) 
	{ 
		if (x < finalx) x++;
		if (y < finaly) y++;
	   /* Put the units back on the coordinates before
	      assigning them to the properties to cause the 
	      move */
		dom.style.left = x + "px";
		dom.style.top = y + "px";
	}

}