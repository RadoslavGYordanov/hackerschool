list1=[1,2,3,2,2,5,1,6,6,7,2,8,6,9,67,9]

def sets(numbers):
	numbers=set(numbers)
	numbers=list(numbers)
	return numbers;

def loop(list):
	new_list=[]
	for x in list:
		if x not in new_list:
			new_list.append(x)
	return new_list
			

a=loop(list1)
b=sets(list1)
print 'The original list: ',list1
print 'Using a loop: ',a
print 'Using sets: ',b