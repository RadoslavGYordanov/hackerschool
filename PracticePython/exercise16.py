import random

choice ='y'
symbols=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','!','@','$','%','^','&','*','(',')','_','+','?','#']
while choice=='y':
	strenght=int(raw_input('How strong do you want your password to be?[1/2/3]: '))
	password=[]
	if(strenght==1):
		for x in range(0,8):
			random_index = random.randrange(0,51)
			password.append(symbols[random_index])
	elif(strenght==2):
		for x in range(0,12):
			random_index = random.randrange(0,61)
			password.append(symbols[random_index])
	elif(strenght==3):
		for x in range(0,16):
			random_index = random.randrange(0,73)
			password.append(symbols[random_index])
	password=''.join(str(x) for x in password)
	print 'Your password: ',password
	
	choice=''
	while choice!='y' and choice!='n':
		choice=raw_input('Do you want another password?[y/n]: ')
		if choice!='y' and choice!='n':
			print 'Invalid choice! [y/n]'