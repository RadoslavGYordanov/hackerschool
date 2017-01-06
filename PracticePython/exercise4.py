import sys


if sys.version_info[0] >= 3:
	num=int(input("Please enter a number: "))
else:
	num=int(raw_input("Please enter a number: "))


result=list()
for i in range(2,num+1):
	if num % i == 0:
		result.append(i)

print result
