<?php
	$con=mysql_connect("localhost","vhr","1234");
	mysql_select_db("addr_name")
	$name=$_GET["name"];
	$add1=$_GET["add1"];
	$add2=$_GET["add2"];
	$mail=$_GET["mail"];
	print "<html><head><title>insert</title></head><body><center>";
	mysql_query("insert into student values('$name','$add1','$add2','$mail')");
	$res=mysql_query("select * from student");
	$len=mysql_num_rows($res);
	if($len==0)
	{
		print "database empty";
	}
	else
	{
		print "<table border='1'><tr><td>name</td><td>address1</td><td>address2</td><td>email</td></tr>";
		while($row=mysql_fetch_rows($res))
		{
			print "<tr><td>{$row[0]}/td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td></tr>";
		}
	}
	print "</table></center></body></html>";

	
?>
