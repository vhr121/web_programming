
<?php
	print "<html><head><title>cookie</title></head><body><center>";
	print "<h1>cookies</h1>";
	$expire_on=time()*60*60*24;
	setcookie("last_visit",date("G:i:s"),$exipre_on,"/");
	if(isset($_COOKIE["last_visit"]))
	{
		
		print "last visited on : {$_COOKIE['last_visit']} ";
		
	}
	else
	{
		print "Visiting for the first time!!";
	}
	
	print "</center></body></html>";
	
	

	
?>
