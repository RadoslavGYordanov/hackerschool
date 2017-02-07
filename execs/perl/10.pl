#!/usr/bin/perl

use strict;
use warnings;

my @arr1;
my @arr2;

for(my $i=0;$i<20;$i+=1)
{
	if($i<15)
	{
		$arr1[$i]=int(rand(30));
	}
	$arr2[$i]=int(rand(30));	
}
my @result;

foreach (@arr1) {
  print "$_ ";
}

print "\n";
foreach (@arr2) {
  print "$_ ";
}
print "\n";
for (my $i=0;$i<15;$i+=1)
{
	for(my $j=0;$j<20;$j+=1)
	{
		if($arr1[$i]==$arr2[$j])
		{
			push(@result,$arr1[$i]);		
		}
	}
}

foreach (@result) {
  print "$_ ";
}
print "\n";

my $flag;
my $result_size=@result;
for(my $i=0;$i<$result_size;$i+=1)
{
	$flag=1;
	for(my $j=0;$j<$i;$j+=1)
	{
		if($result[$i]==$result[$j])
		{
			$flag=0;
		}
	}
	if($flag)
	{
		print($result[$i].' ');
	}
	
}

print "\n";


