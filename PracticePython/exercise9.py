import sys
import random

while 1:
	num=random.randint(1,9)
	counter=0
	while 1:
		if sys.version_info[0] >= 3:
			guess=input("Enter a number: ")
		else:
			guess=raw_input("Enter a number: ")
		counter+=1
		if guess == "exit":
			flag=1
			break;
		if int(guess) > num:
			print("You guessed too high")
		elif int(guess)<num:
			print("You guessed too low")
		else:
			print("You guessed it! ...in %s moves"%counter)
			break
	if guess == "exit":
		break
