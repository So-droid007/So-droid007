
attemt = 10
while(attemt<=10):
    attemt = attemt-1
    total_attempt = 10-attemt

    inp = int(input("Guess the number :"))

    if attemt==0:
        print("Game over!")
        break
    n = 25
    if inp>25:
        print("Please try lesser!")
        print("Guesses left!",attemt)
    elif inp<25:
        print("Please try greater!")
        print("Guesses left!", attemt)

    elif inp==n:
        print("Congo!you guess the right number!")
        print("in",total_attempt,"guesses")
        break





