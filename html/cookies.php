<html>
	<head>
		<title>Cookies</title>
	</head>
	<body>
		<center><h1>Cookies</h1>

<?php
	$expire_on=time()+60*60*24;
	setcookie("last_visit",date(),$expire_on);
	if(isset($_COOKIE["last_visit"])
	{
		print "last visited on $_COOKIE['last_visit']";
	}
	
	
	
?>
		</center>
	</body>
</html>
	
	
	
