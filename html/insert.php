<?php
	$con=mysqli_connect("localhost","vhr","1234","name_addr");
	

	
	$name = filter_input(INPUT_GET, 'name');
	$add1=filter_input(INPUT_GET, 'add1');
	$add2=filter_input(INPUT_GET, 'add2');
	$mail=filter_input(INPUT_GET, 'mail');
	print "<html><head><title>insert</title></head><body><center>";
	mysqli_query("insert into student values('$name','$add1','$add2','$mail')");
	$res=mysqli_query("select * from student");
	$len=mysqli_num_rows($res);
	if($len==0)
	{
		print "database empty";
	}
	else
	{
		print "<table border='1'><tr><td>name</td><td>address1</td><td>address2</td><td>email</td></tr>";
		while($row=mysqli_fetch_array($res))
		{
			print "<tr><td>{$row[0]}/td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td></tr>";
		}
	}
	print "</table></center></body></html>";

	
?>
