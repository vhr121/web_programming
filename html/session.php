<?php
	print "<html><head><title>session</title></head><body><center>";
	session_start();
	print "<h1>";
	if(!isset($_SESSION["page_views"]))
	{
		print "First visitor\n";
		$_SESSION["page_views"]=1;
	}
	else
	{
		$_SESSION["page_views"]++;
		print "visitor number: {$_SESSION['page_views']}\n";
	}
	print "</h1></center></body></html>";
?>
