#Design a calculator which will solve all problems correctly except these
#45*3=555,56+9=77,56/6=4
#your programme should take operators and two numbers from the user






print("Enter the first value :")
num1 = int(input())
print("Enter the second value :")
num2 = int(input())
print("What you want to do ? * , / , + ,- ? :")
num3 = input()

if num3=="-":
    print(num1-num2)




if num1==45 and num2 == 3 and num3=="*":
    print(555)
elif num1==3 and num2==45 and num3=="*":
    print(555)
elif num3=="*":
    print(num1*num2)


if num1==56 and num2 == 9 and num3=="+":
    print(77)
elif num1 == 9 and num2 == 56 and num3=="+":
    print(77)
elif num3=="+":
    print(num1+num2)


if num1==56 and num2 == 6 and num3=="/":
    print(4)
elif num1==6 and num2 == 56 and num3=="/":
    print(4)
elif num2==0 and num3=="/":
    print("Denominator Should be greater than zero!")
elif num3=="/":
    print(num1/num2)























