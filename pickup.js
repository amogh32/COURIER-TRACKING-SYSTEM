function ValidateForm()
{
	var y=document.getElementById("number").value;
	if(y.length>10)
	{
		alert("Contact Number not valid!");
		return false;
	}
	y=document.getElementById("altnumber").value;
	if(y.length>10)
	{
		alert("Alternate Contact Number not valid!");
		return false;
	}
	y=document.getElementById("pincode").value;
	if(y.length!=6)
	{
		alert("Pin Code Invalid!");
		return false;
	}
	return true;
}
