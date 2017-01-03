import sys

my_list = [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]

new_list=[element for element in my_list if element<5]
print(new_list)

if sys.version_info[0] >= 3:
	num=int(input("Please enter a number: "))
else:
	num=int(raw_input("Please enter a number: "))

newer_list=[element for element in my_list if element<num]
print(newer_list)
