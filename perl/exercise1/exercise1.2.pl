#!/usr/bin/perl

use strict;
use warnings;

my $number=4000/7;
printf("%+010.3f",$number);
print "\n";

if (($number-1000)<0)
{
print $number.'-1000 =';
printf("%+010.3f",($number-1000));
print "\n";
}
