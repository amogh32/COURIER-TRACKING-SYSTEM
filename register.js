function ValidateForm()
{
	var x=document.getElementById("username").value;
	if(x.length>15)
	{
		alert("Characters exceeded in Username!");
		return false;
	}
	else if(x.indexOf(" ")!=-1)
	{
		alert("Spaces not allowed in Username!");
		return false;
	}
	x=document.getElementById("password").value;
	if(x.length<7)
	{
		alert("Characters not sufficient in Password!");
		return false;
	}
	var y=document.getElementById("confirmpassword").value;
	if(x.localeCompare(y)!=0)
	{
		alert("Password fields do not match!");
		return false;
	}
	y=document.getElementById("number").value;
	if(y.length>10)
	{
		alert("Contact Number not valid!");
		return false;
	}
	x=document.getElementById("altnumber").value;
	if(x.length>10)
	{
		alert("Alternate Contact Number not valid!");
		return false;
	}
	x=document.getElementById("t&c");
	if(x.checked==false)
	{
		alert("You need to agree to the terms and conditions in order to register!");
		return false;
	}
	alert("You've registered successfully!");
	return true;
}
function move(score) {
	var elem = document.getElementById("myBar");
	if (score > 80)
        elem.style.backgroundColor="green";
    else if (score > 30)
        elem.style.backgroundColor="yellow";
    else
        elem.style.backgroundColor="red";
  	frame();
  	function frame() {
    elem.style.width = score + '%'; 
  }
}
function scorePassword() {
	var pass=document.getElementById("password").value;
    var score = 0;
    if (!pass)
        document.getElementById("p").innerHTML="Password NULL!";

    // award every unique letter until 5 repetitions
    var letters = new Object();
    for (var i=0; i<pass.length; i++) {
        letters[pass[i]] = (letters[pass[i]] || 0) + 1;
        score += 5.0 / letters[pass[i]];
    }

    // bonus points for mixing it up
    var variations = {
        digits: /\d/.test(pass),
        lower: /[a-z]/.test(pass),
        upper: /[A-Z]/.test(pass),
        nonWords: /\W/.test(pass),
    }

    variationCount = 0;
    for (var check in variations) {
        variationCount += (variations[check] == true) ? 1 : 0;
    }
    score += (variationCount - 1) * 10;

    score=parseInt(score);
    move(score);
    if (score > 80)
        document.getElementById("p").innerHTML="Password Strong!";
    else if (score > 30)
        document.getElementById("p").innerHTML="Password Medium!";
    else
        document.getElementById("p").innerHTML="Password Weak!";
}
