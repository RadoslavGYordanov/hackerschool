while 1:

	choice=raw_input("Do you want to play?(y/n): ")
	if choice=='y':

		choice1=raw_input("Player 1 choose [rock|paper|scissors]: ")
		choice2=raw_input("Player 2 choose [rock|paper|scissors]: ")

		if choice1==choice2:
			print "Draw!"
		elif choice1=='rock' and choice2=='scissors':
			print "Player 1 Wins!"
		elif choice1=='rock' and choice2=='paper':
			print "Player 2 Wins!"
		elif choice1=='paper' and choice2=='rock':
			print "Player 1 Wins!"
		elif choice1=='paper' and choice2=='scissors':
			print "Player2 Wins!"
		elif choice1=='scissors' and choice2=='paper':
			print "Player 1 Wins!"
		elif choice1=='scissors' and choice2=='rock':
			print "Player2 Wins!"
		else:
			print "Invalid input"

	elif choice == 'n':
		break

	else:
		print "Please choose a valid option"

