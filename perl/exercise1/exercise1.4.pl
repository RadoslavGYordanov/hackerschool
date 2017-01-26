#!/usr/bin/perl

use strict;
use warnings;


sub quadr_calc
{
	my($d,$x,$x1,$x2);
	my($a,$b,$c) = @_;
	if($a!=0)
	{
	$d=$b*$b-(4*$a*$c);
	if($d<0)
	{
		print "D<0: No solution";
	}
	elsif($d==0)
	{
		$x=(0-$b)/(2*$a);
		print "D=0: X1=X2=".$x;		
	}
	elsif($d>0)
	{
		$x1=((0-$b)+($d**0.5))/(2*$a);
		$x2=((0-$b)-($d**0.5))/(2*$a);
		print "D>0: X1=".$x1." X2=".$x2;
	}
	}
	else
	{
		$x=(0-$c)/$b;
		print"a=0: Not a qiadratic function! \nX=".$x;
	}
}	
print "This program generates 3 random numbers, prints them, uses them as coefficents in a quadratic equation and prints the roots\n";

my $a=int(rand(100));
my $b=int(rand(100));
my $c=int(rand(100));

print "a=$a \nb=$b \nc=$c\n";
quadr_calc($a,$b,$c);
print "\n";
