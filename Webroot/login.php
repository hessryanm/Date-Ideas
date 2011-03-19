<html>
<head>
<link rel="stylesheet" type="text/css" href="mainstyle.css" />
<title>Log In</title>
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<?php require("header.php");?>
<h3 class="center">Please Log In</h3>
<div class="center">
<form name="login" onsubmit="validatelogin()" action="successpage.htm">
<p style="text-align:center">Username: <input type="text" id="Username" name="uname" onblur="validate(this,'username_val','length',5,20)" />
<span class="help" id="username_val"></span></p>
<p style="text-align:center">Password: <input type="password" id="Password" name="pass" onblur="validate(this,'password_val','length',5,20)"/>
<span class="help" id="password_val"></span></p>
<p style="text-align:center"><input type="button" value="Submit" onclick="loginSubmit(this.form)"/></p>
</form>

<p class="fine">Don't have an account?  Click <a href="register.php">here</a> to register.</p>
</div>

</body>
</html>