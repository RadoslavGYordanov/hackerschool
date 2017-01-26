#!/usr/bin/perl

use strict;
use warnings;

my @lines;
for (my $i=0; $i<3; $i++) {
  print "Input a line of text:\n";
  chomp(my $line = <STDIN>);
  $lines[$i] = $line;
}
$" = "\$";
print "@lines\n";

