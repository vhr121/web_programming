#! /usr/bin/perl
use CGI;

print "Content-type: text/html \n\n";
print "<html><head><title>ENV_VARIABLES</title></head><body>";
$cgi=new CGI;
print "<center><h1>environment variables</h1></br>";
print "<table border=1><tr><td>environment name</td><td>env name</td></tr>";
foreach $a (sort keys %ENV)
{
    print "<tr><td>$a</td><td>$ENV{$a}</td></tr>";
}
print "</table></body></html>";

