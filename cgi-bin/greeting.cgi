#! /usr/bin/perl
use CGI;
print "content-type: text/html \n\n";
$cgi= new CGI;
$name= $cgi->param("name");
@greet=("hello","have a nice day","have fun","whoo!!great time");
$sub=rand(4);
print "<html><head><title>greeting</title></head><body><center>";
print "<h1>Greetings</h1>";
print "$greet[$sub]  $name\n";
print "</center></body></html>";



