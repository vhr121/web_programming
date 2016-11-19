<?php

	$con=mysql_connect("localhost","vhr","1234");
	mysql_select_db("name_addr");
	$search=$_GET["name"];
	$res=mysql_query("select * from student where name='$search'");
	if(mysql_num_rows($res))
	{
	while($row=mysql_fetch_rows($res))
	{
		print "$row[0] $row[1] $row[2] $row[3]";
	}
	}
	else
	{
		print "empty database";
	}
	mysql_close($con);
?>

