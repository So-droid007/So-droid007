print("What do you want? log or retrieve!")
inp1 = input()
print("For whom? rohan,subham or hamad?:")
inp2 = input()
print("diet or exercise? :")
inp3 = input()

#Rohan part--------

if inp1=="log" and inp2=="rohan" and inp3=="diet" :
    def getdate():
        import datetime
        return datetime.datetime.now()


    r1 = open("rohan(diet).txt","a")
    print("now log your data :")
    inp4 = input()
    r1.write("\n")
    r1.write(str(getdate()))
    r1.write(" ")
    r1.write(inp4)
    r1.close()

elif inp1=="log" and inp2=="rohan" and inp3=="exercise":
    def getdate():
        import datetime
        return datetime.datetime.now()
    r = open("rohan(exercise).txt","a")
    print("now log your data :")

    inp4 = input()
    r.write("\n")
    r.write(str(getdate()))
    r.write(" ")
    r.write(inp4)
    r.close()

elif inp1=="retrieve" and inp2=="rohan" and inp3=="diet":
    r1 = open("rohan(diet).txt")
    print(r1.read())
elif inp1=="retrieve" and inp2=="rohan" and inp3=="exercise":
    r = open("rohan(exercise).txt")
    print(r.read())

#subham part ----

elif inp1 == "log" and inp2 == "subham" and inp3 == "diet":
        def getdate():
            import datetime
            return datetime.datetime.now()
        s1 = open("subham(diet).txt", "a")

        print("now log your data :")
        inp4 = input()

        s1.write("\n")
        s1.write(str(getdate()))
        s1.write(" ")
        s1.write(inp4)
        s1.close()
elif inp1 == "log" and inp2 == "subham" and inp3 == "exercise":
        def getdate():
            import datetime
            return datetime.datetime.now()


        s = open("subham(exercise).txt", "a")


        print("now log your data :")
        inp4 = input()

        s.write("\n")
        s.write(str(getdate()))
        s.write(" ")
        s.write(inp4)
        s.close()

elif inp1 == "retrieve" and inp2 == "subham" and inp3 == "diet":
        s1 = open("subham(diet).txt")
        print(s1.read())
elif inp1 == "retrieve" and inp2 == "subham" and inp3 == "exercise":
        s = open("subham(exercise).txt")
        print(s.read())

 #hamad part ------

elif inp1 == "log" and inp2 == "hamad" and inp3 == "diet":
        def getdate():
            import datetime
            return datetime.datetime.now()


        h1 = open("hamad(diet).txt", "a")


        print("now log your data :")
        inp4 = input()

        h1.write("\n")
        h1.write(str(getdate()))
        h1.write(" ")
        h1.write(inp4)
        h1.close()
elif inp1 == "log" and inp2 == "hamad" and inp3 == "exercise":
        def getdate():
            import datetime
            return datetime.datetime.now()


        h = open("hamad(exercise).txt", "a")


        print("now log your data :")
        inp4 = input()

        h.write("\n")
        h.write(str(getdate()))
        h.write(" ")
        h.write(inp4)
        h.close()

elif inp1 == "retrieve" and inp2 == "hamad" and inp3 == "diet":
        h1 = open("subham(diet).txt")
        print(h1.read())
elif inp1 == "retrieve" and inp2 == "hamad" and inp3 == "exercise":
    h = open("subham(exercise).txt")
    print(h.read())


else:
    print("Invalid Keywords")
















