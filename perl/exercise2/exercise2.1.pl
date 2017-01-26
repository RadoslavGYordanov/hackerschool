#!/usr/bin/perl

use strict;
use warnings;

#A.1
print "Enter a line of text: ";
my $str=<STDIN>;
print $str;

#A.2
print "Enter three lines of text\n";
my @str;

for(my $i=0;$i<3;$i++)
{	
	print "Enter a line: ";
	chomp($str[$i]=<STDIN>);
}

for(my $i=0;$i<3;$i++)
{
	if($i==0)
	{
		print "|";
	}
	print " $str[$i] |";  
}

print "\n";
