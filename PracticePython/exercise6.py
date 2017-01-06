import sys


if sys.version_info[0] >= 3:
	string=input("Please enter a string: ")
else:
	string=raw_input("Please enter a string: ")

middle=len(string)/2
print(middle)
flag=0

for i in range(0,middle):
	print(string[i]+" "+string[-(i+1)])
	if string[i] != string[-(i+1)]:
		flag=1

if flag==1:
	print("String is not a palindrome")
else:
	print("String is a palindrome")
