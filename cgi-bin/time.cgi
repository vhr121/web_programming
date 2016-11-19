#! /usr/bin/perl
use CGI ":standard";
print header;
print "<html><head><title>time</title><meta http-equiv='refresh' content='1'/></head><body>";

($h,$m,$s)= localtime(time);

print "<center><h1>system time is </h1>";
print "$s:$m:$h";

print "</center>";
print end_html;

