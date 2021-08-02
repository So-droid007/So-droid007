import random
print("Welcome to Snake_Water_Gun game")
computer_point = 0
player_point = 0
chances = 10
for i in range(0,10):
    chances = chances - 1
    player = input("s = snake, w = water, g = gun :")
    computer = ["s","g","w"]
    rand = random.choice(computer)
    print(rand)




    if player=="s" and rand=="w":
        print("player wins")
        player_point = player_point+1
        print("player get 1 point")
        print(f"player point {player_point}  and computer point  {computer_point} ")
        print("Chances left",chances)
    elif player=="w" and rand=="g":
        print("player wins")
        player_point = player_point+1
        print("player get 1 point")
        print(f"player point {player_point}  and computer point  {computer_point} ")
        print("Chances left",chances)
    elif player == "g" and rand == "s":
        print("player wins")
        player_point = player_point+1
        print("player get 1 point")
        print(f"player point {player_point}  and computer point  {computer_point} ")
        print("Chances left",chances)
    elif player == "w" and rand == "s":
        print("computer wins")
        computer_point = computer_point+1
        print("computer get 1 point")
        print(f"player point {player_point} and computer point {computer_point} ")
        print("Chances left",chances)
    elif player == "g" and rand == "w":
        print("computer wins")
        computer_point = computer_point+1
        print("computer get 1 point")
        print(f"player point {player_point} and computer point {computer_point} ")
        print("Chances left",chances)
    elif player == "s" and rand == "g":
        print("computer wins")
        computer_point = computer_point+1
        print("computer get 1 point")
        print(f"player point {player_point} and computer point {computer_point} ")
        print("Chances left",chances)
    elif player==rand:
        print("This is draw")
        print("both get 0 point")
        print(f"player point {player_point} and computer point {computer_point} ")
        print("Chances left",chances)
    else:
        print("Invalid key! ")
        print("Chances left",chances)

print("GAME OVER!")

if computer_point==player_point:
    print("Tie")

elif computer_point > player_point:
    print("Computer wins and you loose")

else:
    print("you win and computer loose")

print(f"your point is {player_point} and computer point is {computer_point}")



# Snake Water Gun Game in Python
# The snake drinks the water, the gun shoots the snake, and gun has no effect on water.
















