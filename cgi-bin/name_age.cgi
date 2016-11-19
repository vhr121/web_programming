#! /usr/bin/perl
use CGI ":standard";
use DBI;
print header;
print start_html("name_age");
$cgi= new CGI;
$name=$cgi->param("name");
$age=$cgi->param("age");

$dbh=DBI->connect("dbi:mysql:name_age","vhr","1234");
$sth=$dbh->prepare("insert into student values('$name','$age')");

$sth->execute();

$sth=$dbh->prepare("select * from student");
$sth->execute();

$len=$sth->rows;

if($len==0)
{
	print "No Entries in the database";
}
else
{
	print "<center><h1>Database Entries</h1>";
	print "<table border=1 width='30%' height='40%'><tr><td>name</td><td>age</td></tr>";
	while(@row_arr=$sth->fetchrow_array())
	{
		print "<tr><td>$row_arr[0]</td><td>$row_arr[1]</td></tr>";
	}
	print "</table>";
	</center>
}
 print end_html;


