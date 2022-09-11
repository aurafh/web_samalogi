
	function ShowPassword()
{
	if(document.getElementById("password").value!="")
	{
		document.getElementById("password").type="text";
		document.getElementById("Show").style.display="none";
		document.getElementById("Hide").style.display="block";
	}
}

function HidePassword()
{
	if(document.getElementById("password").type == "text")
	{
		document.getElementById("password").type="password"
		document.getElementById("Show").style.display="block";
		document.getElementById("Hide").style.display="none";
	}
}
