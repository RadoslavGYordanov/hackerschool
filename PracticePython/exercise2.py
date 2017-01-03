import sys

if sys.version_info[0] >= 3:
	num=int(input("Please enter a number: "))
	check=int(input("Please enter another number: "))
else:
	num=int(raw_input("Please enter a number: "))
	check=int(raw_input("Please enter another number: "))

if num % 4 == 0:
	print("\n"+str(num)+"is a multiple of 4")
else:
	if num%2 == 0:
		print("\n"+str(num)+" is even")
	else:
		print("\n"+str(num)+" is odd")

if num % check == 0:
	print(str(check)+" divides "+str(num)+" evenly")
else:
	print(str(check)+" doesnt divide "+str(num)+" evenly")
