var valid=true;

function valLength(min,max,field,helptext)
{
var x=field.value;
var text=document.getElementById(helptext);
if (x.length<min||x.length>max)
	{
	text.innerHTML=field.id+" must be between "+min+" and "+max+" characters";
	valid=false;
	}
else
	{
	text.innerHTML="";
	valid=true;
	}
}

function valEmail(field,helptext)
{
var x=field.value;
var atpos=x.indexOf("@");
var dotpos=x.indexOf(".");
var text=document.getElementById(helptext);
if (atpos<1||dotpos<atpos+2||dotpos+2>=x.length)
	{
	text.innerHTML="Not a valid email address";
	valid=false;
	}
else
	{
	text.innerHTML="";
	valid=true;
	}
}

function valPass(field, field1, helptext)
{
var x=field.value;
var text=document.getElementById(helptext);
var y=field1.value;
if (x!=y)
	{
	text.innerHTML="Passwords do not match";
	valid=false;
	}
else
	{
	text.innerHTML="";
	valid=true;
	}
}

function validate(field, helptext, type, min, max, field1)
{
var x=field.value;
var text=document.getElementById(helptext);
if (x==null || x=="")
	{
	if (text!=null)
		{
		text.innerHTML="Please input "+field.id;
		}
	valid=false;
	}
else if (type=="length")
	{
	valLength(min,max,field,helptext);
	}
else if (type=="email")
	{
	valEmail(field,helptext);
	}
else if (type=="pass")
	{
	valPass(field, field1, helptext);
	}
else
	{
	if (text!=null)
		{
		text.innerHTML="";
		}
	valid=true;
	}
}

function registerSubmit(form)
{
validate(form.fname,'fname_val');
validate(form.lname,'lname_val');
validate(form.email,'email_val', 'email');
validate(form.uname,'username_val','length',5,20);
validate(form.pass,'password_val','length',5,20);
validate(form.vpass,'vpass_val','pass',0,0,form.pass);
if (valid==true)
	{
	form.submit();
	}
else
	{
	alert("Please verify registration information");
	}
}

function loginSubmit(form)
{
validate(form.uname,'username_val','length',5,20);
validate(form.pass,'password_val','length',5,20);
if (valid==true)
	{
	form.submit();
	}
else
	{
	alert("Please verify login information");
	}
}

function ideaSubmit(form)
{
validate(form.title,'title_val');
validate(form.post_desc,'desc_val');
if (valid==true)
	{
	form.submit();
	}
else
	{
	alert("Please verify submission information");
	}
}

function searchSubmit()
{
validate(search.query);
if (valid==true)
	{
	search.submit();
	}
else
	{
	alert("Please enter a search term");
	}
}