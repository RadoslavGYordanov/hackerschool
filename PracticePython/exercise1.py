import datetime
import sys

now = datetime.datetime.now()

print 

if sys.version_info[0] >= 3:
	name=input("Please input your name: ")
	age=int(input("Please input your age: "))
	num=int(input("Please enter a number: "))
else:
	name=raw_input("Please input your name: ")
	age=int(raw_input("Please input your age: "))
	num=int(raw_input("Please enter a number: "))

new_age=(now.year)+(100-age)

str=name+", you will turn 100 years in "+str(new_age)+"\n"
print (num*str)
