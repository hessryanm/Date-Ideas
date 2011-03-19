function valLength(min,max,field,helptext)
{
var x=field.value;
var text=document.getElementById(helptext);
if (x.length<min||x.length>max)
	{
	text.innerHTML=field.id+" must be between "+min+" and "+max+" characters";
	return false;
	}
else
	{
	text.innerHTML="";
	return true;
	}
}