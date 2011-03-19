var v;

function valsearch()
{
var x=document.forms["search"]["value"].value;
if (x==null || x=="")
	{
	alert("Input search term");
	v=false;
	}
else
	{
	v=true;
	}
}

function searchsubmit()
{
valsearch();
if (v==true)
	{
	document.forms["search"].submit();
	}
}

function valregister()
{
var fname=document.forms["register"]["fname"];
var lname=document.forms["register"]["lname"];
var email=document.forms["register"]["email"];
var uname=document.forms["register"]["uname"];
var pass=document.forms["register"]["pass"];
var vpass=document.forms["register"]["vpass"];
if (fname===null||fname==="")
	{
	alert("Please enter your first name");
	return false;
	}
if (lname===null||fname==="")
	{
	alert("Please enter your last name");
	return false;
	}
if (email===null||fname==="")
	{
	alert("Please enter your email address");
	return false;
	}
if (uname===null||fname==="")
	{
	alert("Please enter your desired username");
	return false;
	}
if (pass===null||fname==="")
	{
	alert("Please enter your desired password");
	return false;
	}
if (vpass===null||fname==="")
	{
	alert("Please retype your password");
	return false;
	}
var atpos=email.indexOf("@");
var dotpos=email.indexOf(".");
if (atpos<1||dotpos<atpos+2||dotpos+2>=email.length)
	{
	alert("Not a valid email address");
	return false;
	}
if (uname.length<=4)
	{
	alert("Username must be at least 5 characters");
	return false;
	}
if (pass.length<=4)
	{
	alert("Password must be at least 5 characters");
	return false;
	}
if (vpass!==pass)
	{
	alert("Passwords do not match");
	return false;
	}
}