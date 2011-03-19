<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="mainstyle.css" />
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<?php require("header.php");?>
<h3 class="center">Sign Up to Post an Idea</h3>
<div class="center" style="width:26%">
<form name="register" action="successpage.htm">
<table class="center">
<tr>
	<td class="right">First Name:</td><td><input id="first name" type="text" name="fname" onblur="validate(this,'fname_val')"/></td><td class="help" id="fname_val"></td>
</tr>
<tr>
	<td class="right">Last Name:</td><td><input id="last name" type="text" name="lname" onblur="validate(this,'lname_val')"/></td><td class="help" id="lname_val"></td>
</tr>
<tr>
	<td class="right">Email Address:</td><td><input id="email address" type="text" name="email" onblur="validate(this,'email_val','email')"/></td><td class="help" id="email_val"></td>
</tr>
<tr>
	<td class="right">Desired Username:</td><td><input id="Username" type="text" name="uname" onblur="validate(this,'username_val','length',5,20)"/></td><td class="help" id="username_val"></td>
</tr>
<tr>
	<td class="right">Password:</td><td><input id="Password" type="password" name="pass" onblur="validate(this,'password_val','length',5,20)"/></td><td class="help" id="password_val"></td>
</tr>
<tr>
	<td class="right">Verify Password:</td><td><input id="verification Password" type="password" name="vpass" onblur="validate(this,'vpass_val','pass',0,0,form.pass)"/></td><td class="help" id="vpass_val"></td>
</tr>
<tr>
	<td colspan="2" class="center"><input type="button" value="Sign Up!" onclick="registerSubmit(this.form)"/></td>
</tr>
</table>
</form>
</div>




</body>
</html>