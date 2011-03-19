<html>
<head>
<title>Idea Submitted</title>
<link rel="stylesheet" type="text/css" href="Webroot/mainstyle.css" />
<script type="text/javascript" src="Webroot/validate.js"></script>
</head>
<body>
<div class="title"><img style="width:100%;" src="Webroot/title.gif" /></div>
<div class="search">Search: 
<form style="display:inline" name="search" action="successpage.htm"><input type="text" name="query" />
<a href="javascript: searchSubmit()"><img src="Webroot/seo.png" alt="Search" title="Search" /></a></form></div>
<ul class="menu">
	<li><a href="Webroot/mainpage.php#home">home</a></li>
	<li><a href="Webroot/submit.php">post an idea</a></li>
	<li><a href="#about">about us</a></li>
	<li><a href="#contact">contact us</a></li>
	<li><a href="Webroot/login.php">log in</a></li>
</ul>
<?php 

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("date_ideas") or die(mysql_error());

$title=$_POST['title'];
$title=mysql_real_escape_string($title);
$post_desc=$_POST['post_desc'];
$post_desc=mysql_real_escape_string($post_desc);

$submit="INSERT INTO ideas (title, post_desc) VALUES ('$title','$post_desc');";


mysql_query($submit)
or die(mysql_error());

echo ("Idea submitted.  Click <a href='Webroot/submit.php'>here</a> to go back and post another idea.");

?>
</body>
</html>
