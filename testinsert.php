<html>
<body>
<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("date_ideas") or die(mysql_error());

//$query="INSERT INTO ideas(title,desc) VALUES('Sample Date Idea','This is a sample date idea.')";

	
mysql_query("INSERT INTO  date_ideas.ideas (
`id` ,
`title` ,
`desc` ,
`post_date`
)
VALUES (
NULL ,  'Sample 5',  'Another date idea.', 
CURRENT_TIMESTAMP
);")
or die(mysql_error());




/*$query="SELECT type, AVG(price) FROM products GROUP BY type";

$result=mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr><th>Type</th><th>Price</th></tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>";
	echo $row['type'];
	echo "</td><td>";
	echo $row['AVG(price)'];
	echo "</td></tr>";
}
echo "</table>";*/

?>
</html>
</body>


$submit = "INSERT INTO  `date_ideas`.`ideas` (
`id` ,
`title` ,
`desc` ,
`post_date`
)
VALUES (
NULL ,  '$title',  '$desc', 
CURRENT_TIMESTAMP
);";

