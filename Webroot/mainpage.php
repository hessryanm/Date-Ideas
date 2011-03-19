<html>
<head>
<title>Great Date Ideas</title>
<link rel="stylesheet" type="text/css" href="mainstyle.css" />
<script type="text/javascript" src="validate.js"></script>
</head>
<body>

<div id="home"><?php require("header.php");?></div>

<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("date_ideas") or die(mysql_error());

$result=mysql_query("SELECT * FROM ideas ORDER BY post_date DESC") or die(mysql_error());


while($row = mysql_fetch_array($result))
{
echo ("<h4 class='center'>" . $row['title'] . "</h4>");
echo "<p class='center'>";
$date=strtotime($row['post_date']);
$time=(time()-21600);
//if (($time-$date)<60)
//	{
//	echo
if (($time-$date)<86400)
	{
	$lapse=($time-$date)/3600;
	echo ("Posted " . round($lapse) . " hours ago");
	}
else if (($time-$date)<172800&&($time-$date)>86400)
	{
	echo "Posted 1 day ago";
	}
else
	{
	echo ("Posted on " . date("m-d-y",$date));
	}
echo "</p>";
echo ("<p class='center'>" . $row['post_desc'] . "</p>");
}

echo date("H:i:s");
?>

</body>
</html>