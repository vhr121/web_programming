#! /usr/bin/perl
use CGI ":standard";
print header;
print "<html><head><title>time</time><meta http-equiv='refresh' content='1'></head><body>";
open(IFD,"<visitors.txt");
$count=<IFD>;


close(IFD);

open(OFD,">visitors.txt");
$count++;
print OFD $count;

close(OFD);

print "<center><h1>Number of visitors</h1>";
print "$count\n";


print "</center>";
print end_html;


