import sys

def fibonacci(num):
	list=[]
	num_1=0
	num_2=1
	next=1
	for x in range(1,num+1):
		list.append(next)
		next=num_1+num_2
		num_1=num_2
		num_2=next
		
	return list		

if sys.version_info[0] >= 3:
	num=int(input("Enter a number: "))
else:
	num=int(raw_input("Enter a number: "))

print(fibonacci(num))



