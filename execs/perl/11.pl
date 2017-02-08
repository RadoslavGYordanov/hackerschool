#!/usr/bin/perl

use strict;
use warnings;
use Math::Complex;

sub isPrime
{
	my $num=$_[0];
	my $prime=1;
	
	if($num==1)
	{	
		$prime=0;
	}	
	elsif($num==2)
	{
		$prime=1;
	}
	else
	{
		for(my $i=2;$i<sqrt($num)+1;$i+=1)
		{
			if($num%$i==0)
			{	
				$prime=0;
				last;
			}			
		}
	}
	return $prime;
}

print("Enter a number: "); 
my $number=<STDIN>;

if(isPrime($number))
{
	printf("%d is prime\n",$number);
}
else
{
	printf("%d is not prime\n",$number);
}




