import sys
import math

def is_prime(num):
	for x in xrange(2,num):
		if num%x==0:
			return 0
	return 1

if sys.version_info[0] >= 3:
	num=int(input("Enter a number: "))
else:
	num=int(raw_input("Enter a number: "))

if is_prime(num):
	print("\nThe number is prime\n")
else:
	print("\nThe number is not prime\n")
