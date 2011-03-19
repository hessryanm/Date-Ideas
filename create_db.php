<?php
mysql_connect("localhost","root","") or die(mysql_error());
echo"Connected to mySQL<br/>";

//mysql_query("CREATE DATABASE date_ideas") or die(mysql_error());
//echo"Database created<br/>";
mysql_select_db("date_ideas");

mysql_query("CREATE TABLE ideas(
	id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
	title VARCHAR(50),
	desc TEXT,
	post_date TIMESTAMP())")
	or die(mysql_error());
echo"Table Created<br/>";
?>