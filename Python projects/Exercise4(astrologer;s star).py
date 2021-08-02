# print("how many rows do you want :")
# one = int(input())
# print("type 1 or 0")
# two = int(input())
# new  = bool(two)
# if new==True:
#     for i in range(1,one+1):
#         for j in range(1,i+1):
#             print("*",end=" ")
#         print()
#
#
# elif new == False:
#     for i in range(one,0,-1):
#         for j in range(1,i+1):
#             print("*",end="")
#         print()



# print("How many rows do you want to print this pattern ? :")
# user_input = int(input())
#
# # for i in range(1,user_input+1):
# #     for j in range(1,i+1):
# #         print("*",end = " ")
# #     print()
#
# for i in range(user_input,0,-1):
#     for j in range(1,i+1):
#         print("*",end = " ")
#     print()

# print("Enter how many rows do you want?:")
# inp1 = int(input())
# print("type 0 or 1") #0 means false and 1 means true
# inp2 = int(input())
#
# new = bool(inp2)
#
# if new==True:
#     for i in range(1,inp1+1):
#         for j in range(1,i+1):
#             print("*", end=" ")
#         print()
#
# elif new == False:
#     for i in range(inp1,0,-1):
#         for j in range(1,i+1):
#             print("*", end=" ")
#         print()
#


# print("How many rows do you want for star pattern? : ")
# value1 = int(input())
# print("Press 1 for straight pattern or press 0 for ups & down pattern :")
# value2 = int(input())
#
# condition = bool(value2)
#
# if condition==True:
#     for i in range(1,value1+1):
#         for j in range(1,i+1):
#             print("*",end=" ")
#         print()
#
# elif condition==False:
#     for i in range(value1,0,-1):
#         for j in range(1,i+1):
#             print("*",end=" ")
#         print()


#by function----

# def function(n):
#     for i in range(1,n+1):
#         for j in range(1,i+1):
#             print("*",end="")
#         print()
# function(5)

def function(n):
    for i in range(n,0,-1):
        for j in range(1,i+1):
            print("*",end="")
        print()
function(10)
