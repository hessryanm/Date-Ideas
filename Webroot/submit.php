<html>
<head>
<title>Submit an Idea</title>
<link rel="stylesheet" type="text/css" href="mainstyle.css" />
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<?php require("header.php");?>
<h3 class="center">Submit an idea</h3>
<div class="center" style="width:32%;">
<form name="idea" action="../ideainsert.php" method="post">
<table>
<tr>
	<td>Idea Title:</td><td><input type="text" size="38" id="title" name="title" onblur="validate(this,'title_val')"/></td><td class="help" id="title_val"></td>
</tr>
<tr>
	<td>Description:</td><td><textarea rows="10" cols="30" id="description" name="post_desc" onblur="validate(this,'desc_val')"></textarea></td><td class="help" id="desc_val"></td>
</tr>
<tr>
	<td></td>
	<td class="center"><input type="button" value="Submit" onclick="ideaSubmit(this.form)" /></td>
</tr>
</table>
</form>
</div>


</body>
</html>