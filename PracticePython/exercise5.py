import random
a=[]
b=[]
for i in range(1,random.randint(5,10)):
	a.append(random.randint(1,50))
for i in range(1,random.randint(5,10)):
	b.append(random.randint(1,50))
print(a)
print(b)

result=[]

for i in a:
	if i in b and i not in result:
		result.append(i)

print(result)
