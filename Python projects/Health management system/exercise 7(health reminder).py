

from pygame import mixer
from datetime import datetime
from time import time

def musiconloop(file,stopper):
        mixer.init()
        mixer.music.load(file)
        mixer.music.play()

        while True:


            a = input()
            if a==stopper:
                mixer.music.stop()

            break

def lognow(msg):
    with open("mylogs.txt","a") as f:
        f.write(f"{msg} {datetime.now()}\n")

if __name__ == '__main__':
    # musiconloop("water.mp3","drunk")
    init_water = time()
    init_eyes = time()
    init_exercise = time()
    watersecs = 6
    eyesecs = 20
    exercisesecs = 18


while True:
       if time()-init_water > watersecs:
           print("water drinking time.Enter 'drank' to stop the alarm")
           musiconloop("water.mp3","drank")
           init_water = time()
           lognow("Drank water at")


       if time()-init_eyes > eyesecs:
           print("Eye relaxsation time.Enter 'relaxeye' to stop the alarm")
           musiconloop("eye exercise.mp3","relaxeye")
           init_eyes = time()
           lognow("Eyes relaxed at")

       if time()-init_exercise > exercisesecs:
           print("Phisical activity time.Enter 'done' to stop the alarm")
           musiconloop("exercise.mp3","drank")
           init_exercise = time()
           lognow("physical activity done at ")















