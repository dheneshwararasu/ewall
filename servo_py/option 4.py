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
GPIO.setup(13,GPIO.OUT)
servo3 = GPIO.PWM(13,50) # pin 12 for servo3 (door)

servo1.start(7)
time.sleep(1)
servo2.start(7)
time.sleep(1)

# Turn servo2 to 120
pos2 = 7
dec = 0.05
while pos2 < 8:
    pos2 += 0.1
    servo2.ChangeDutyCycle(pos2)
    time.sleep(dec)

# Wait for 2 seconds
time.sleep(2)

# return
while pos2 > 7:
    pos2 += 0.1
    servo2.ChangeDutyCycle(pos2)
    time.sleep(dec)

#Clean things up at the end
servo2.stop()
GPIO.cleanup()
