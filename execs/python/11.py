import math

def isPrime(num):
	if num==1:
		prime=False
	elif num==2:
		prime=True
	else:
		prime=True
		for check in range(2,int(math.sqrt(num))+1):
			if num%check==0:
				prime=False
				break
	return prime

number=int(input("Enter a number: "))
if(isPrime(number)):
	print number,"is prime"
else:
	print number," is not prime"
