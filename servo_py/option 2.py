# Import libraries
import RPi.GPIO as GPIO
# Import libraries
import RPi.GPIO as GPIO
import time

# Set GPIO numbering mode
GPIO.setmode(GPIO.BOARD)

# Set pins 11 & 12 as outputs, and define as PWM servo1 & servo2
GPIO.setup(11,GPIO.OUT)
servo1 = GPIO.PWM(11,50) # pin 11 for servo1 (horizontal)
GPIO.setup(12,GPIO.OUT)
servo2 = GPIO.PWM(12,50) # pin 12 for servo2 (vertical)

servo1.start(7)
time.sleep(1)
servo2.start(7)
time.sleep(1)

# Turn servo1 to 180 and servo2  to 60
pos1 = 7
pos2 = 7
dec = 0.1
while pos1 < 12:
    pos1 += 0.1
    servo1.ChangeDutyCycle(pos1)
    time.sleep(dec)
while pos2 > 6:
    pos2 -= 0.1
    servo2.ChangeDutyCycle(pos2)
    time.sleep(dec)

# Wait for 2 seconds
time.sleep(2)

#return
while pos1 > 7:
    pos1 -= 0.1
    servo1.ChangeDutyCycle(pos1)
    time.sleep(dec)
while pos2 < 7:
    pos2 += 0.1
    servo2.ChangeDutyCycle(pos2)
    time.sleep(dec)

# Wait for 2 seconds
time.sleep(0.5)

#Clean things up at the end
servo1.stop()
servo2.stop()
GPIO.cleanup()
