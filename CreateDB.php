<?php
mysql_connect("localhost","admin","password") or die(mysql_error());
echo "connected to mysql<br/>";
mysql_select_db("test_db") or die(mysql_error());
echo "connected to database<br/>";

mysql_query("CREATE TABLE `products` (
  `id` varchar(30) NOT NULL default '',
  `name` varchar(60) NOT NULL default '',
  `type` varchar(30) NOT NULL default '',
  `price` decimal(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1")
or die(mysql_error());
echo "table created<br/>";

/*mysql_query("CREATE TABLE food(
id1 INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id1),
	meal VARCHAR(30),
	position VARCHAR(10)")
or die(mysql_error());
echo "food table created";
	*/
?>