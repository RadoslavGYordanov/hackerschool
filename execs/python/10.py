import random

a = random.sample(range(1,30), 15)
b = random.sample(range(1,30), 20)

print(a)
print(b)
print('A list that contains elements common to both previous lists')
result=[i for i in a if i in b]
print(result)
