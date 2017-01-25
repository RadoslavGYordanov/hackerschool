def reverse_words( str ):
	result=str.split()
	new_list=[]
	for x in range(0,(len(result))):
		new_list.append(result[-(x+1)])
	string=' '.join(new_list)
	return string
	

str=raw_input('Enter a long string: ')
str1=reverse_words(str)
print  str1
